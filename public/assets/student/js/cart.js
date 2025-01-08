$(document).ready(function() {
    $(".addToCartBtn").on('click', function() {
        var subject_id = $(this).data('subject-id');
        addtoCart(subject_id);
    });

    $(".addBuyNowBtn").on('click', function() {
        var subject_id = $(this).data('subject-id');
        addtoCart(subject_id, 'buynow');
    })

    function addtoCart(subject_id = '', btn_type = 'addtocart') {
        if (subject_id == '') {
            bootbox.alert('Something went wronqg');
            return false;
        } else {
            $.ajax({
                url: baseUrl + 'add-to-cart',
                type: 'POST',
                data: {
                    'subject_id': subject_id,
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        if (btn_type == 'addtocart') {
                            bootbox.alert({
                                message: response.message,
                                closeButton: false,
                                callback: function() {
                                    if (response.success) {
                                        $(".cartCount").html(response.totalQty);
                                    } else {
                                        window.location.href = baseUrl + 'auth?auth=login';
                                    }
                                }
                            });
                        } else if (btn_type == 'buynow') {
                            $.ajax({
                                url: baseUrl + 'checkout-cart-items',
                                type: 'POST',
                                dataType: 'json',
                                success: function(response) {
                                    if (response.success) {
                                        // var ci_mode = ciEnv == 'production' ? 'production' : 'sandbox';
                                        var ci_mode = 'sandbox';
                                        const cashfree = Cashfree({
                                            mode: ci_mode //or sandbox
                                            // mode: "production" //or production
                                        });
                                        let checkoutOptions = {
                                            paymentSessionId: response.payment_session_id,
                                            redirectTarget: "_self" //optional (_self or _blank)
                                        }

                                        cashfree.checkout(checkoutOptions);
                                    } else {
                                        bootbox.alert({
                                            message: response.message,
                                            closeButton: false,
                                        })
                                    }
                                }
                            });
                        }
                    } else {
                        bootbox.alert({
                            message: response.message,
                            closeButton: false,
                            callback: function() {
                                window.location.href = baseUrl + 'auth?auth=login';
                            }
                        });
                    }


                }
            })
        }
    }

    $(".showCartBtn").on('click', function() {
        showCartItems();
    });

    function showCartItems(displayButton = 'disabled') {
        fetchCartItems();
        var html = $('.cartPopUpContainer').clone();

        var dialog = bootbox.dialog({
            title: 'Checkout',
            message: html,
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class="bi bi-x"></i> Close',
                    className: 'btn-sm btn-secondary',
                    callback: function() {
                        bootbox.hideAll();
                    }
                },
                yes: {
                    label: '<i class="bi bi-cart-check"></i> Checkout',
                    className: 'btn-sm btn-success checkoutBtn',
                    callback: function() {
                        var totalPayablePrice = $(this).find('#payableAmount').val();
                        if (totalPayablePrice == '0.00') {
                            $.ajax({
                                url: baseUrl + '/payment/free-payable-product',
                                type: 'GET',
                                dataType: 'json',
                                success: function(response) {
                                    if (response.success) {
                                        var url = response.url;
                                        window.open(url, '_self');
                                    } else {
                                        bootbox.alert(response.message);
                                    }
                                }
                            });
                        } else {
                            $.ajax({
                                url: baseUrl + 'checkout-cart-items',
                                type: 'POST',
                                dataType: 'json',
                                success: function(response) {
                                    if (response.success) {
                                        var ci_mode = ciEnv == 'production' ? 'production' : 'sandbox';
                                        const cashfree = Cashfree({
                                            mode: ci_mode //or sandbox
                                            // mode: "production" //or production
                                        });
                                        let checkoutOptions = {
                                            paymentSessionId: response.payment_session_id,
                                            redirectTarget: "_self" //optional (_self or _blank)
                                        }

                                        cashfree.checkout(checkoutOptions);
                                    } else {
                                        bootbox.alert({
                                            message: response.message,
                                            closeButton: false,
                                        })
                                    }
                                }
                            });
                        }
                    }
                },
            },
        });
        dialog.init(function() {
            $(dialog).find('.checkoutBtn').hide();
            $(dialog).find('.cartPopUpContainer').on('click', '.removeCartItems', function() {
                var cart_items_id = $(this).data('cart-item-id');
                removeCartItems(cart_items_id);
            });
            setInterval(function() {
                var htmlVal = $('.cartPopUpContainer').html();
                displayButton = (htmlVal == '<div class="d-flex align items-center justify-content-center h2">No items in cart</div>') ? false : true;
                if (!displayButton) {
                    $(dialog).find('.checkoutBtn').hide();
                } else {
                    $(dialog).find('.checkoutBtn').show();
                }
            }, 800);
            $(dialog).find('.cartPopUpContainer').on('click', '.applyPromocodeBtn', function() {
                var code_name = $(dialog).find('#code_name').val();
                var totalPriceDeciaml = $(dialog).find("#totalPriceDeciaml").val();
                $.ajax({
                    url: baseUrl + 'apply-promocode',
                    type: 'POST',
                    data: {
                        code_name: $.trim(code_name),
                        totalPriceDeciaml: totalPriceDeciaml,
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success == false) {
                            $(dialog).find('.promocodeContainer').css('border', '1px solid red');
                            $(dialog).find('.promocodeError').html(response.message);
                            setTimeout(function() {
                                $(dialog).find('.promocodeContainer').css('border', 'transparent');
                                $(dialog).find('.promocodeError').html('');
                            }, 4000);
                        } else {
                            fetchCartItems();
                        }
                    }
                })
            });
            $(dialog).find(".cartPopUpContainer").on('click', '.removePromoCode', function() {
                bootbox.dialog({
                    message: 'Are you sure you want to remove the promocode ?',
                    closeButton: false,
                    size: 'small',
                    buttons: {
                        cancel: {
                            label: ' Cancel',
                            className: 'btn-sm btn-secondary',
                        },
                        yes: {
                            label: 'Yes',
                            className: 'btn-sm btn-success',
                            callback: function() {
                                $.ajax({
                                    url: baseUrl + 'promo/remove-promocode',
                                    type: 'POST',
                                    dataType: 'json',
                                    success: function(response) {
                                        bootbox.alert({
                                            message: response.message,
                                            closeButton: false,
                                            callback: function() {
                                                fetchCartItems();
                                            }
                                        });
                                    }
                                });
                            }
                        }
                    }
                })

            });
        });
    }

    fetchCartItems();

    function fetchCartItems() {
        $.ajax({
            url: baseUrl + 'fetch-active-cartitems',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    cartHTML(response.cartData);
                    $(".cartCount").html(response.cartData.length);
                }
            }
        })
    }

    cartHTML();

    function cartHTML(cartData = []) {
        if (cartData.length > 0) {
            var html = '<table class="table table-light table-striped table-hover">';
            var totalPrice = 0;
            var discountPercent = 0;
            var discount_type = '';
            $.each(cartData, function(i, v) {
                totalPrice = Number(totalPrice.toFixed(2)) + Number(v.offer_price);
                html += '<tr>' +
                    '<td>' +
                    '<div class="font-weight-bold"> ' + v.subject_name + '</div>' +
                    '<div>' + v.level_name + ' </div>' +
                    '<div> Test Series Type :' + v.type_name + '</div>' +
                    '</td>' +
                    '<td style="vertical-align:middle; font-weight:bold">&#x20B9; ' + v.offer_price + '</td>' +
                    '<td style="vertical-align:middle; font-weight:bold">' +
                    '<a href="javascript:void(0)" class="removeCartItems" data-cart-item-id="' + v.cart_items_id + '"><i class="bi bi-x text-danger"></i></a>' +
                    '</td>' +
                    '</tr>';
                discountPercent = v.discount;
                discount_type = v.discount_type;
            });
            var totalPriceDeciaml = (totalPrice.toFixed(2));
            if (discount_type == 'percent') {
                var discountAmount = (((totalPrice * discountPercent) / 100).toFixed(2));
                var sign = ' % ';
            } else {
                var discountAmount = (discountPercent);
                var sign = ' &#8377 ';
            }
            var payableAmount = ((totalPrice - discountAmount).toFixed(2));
            html += '</table>';
            html += '<div class="input-group mb-1 w-50 ml-auto promocodeContainer">' +
                '<input type="text" class="form-control form-control-sm" placeholder="Enter Promocode" aria-label="Enter Promocode" aria-describedby="applyPromocodeBtn" id="code_name">' +
                '<a herf="javascript:void(0)" class="btn btn-success btn-sm applyPromocodeBtn"><i class="bi bi-cash-coin"></i> Apply</a>' +
                '</div>';
            html += '<div class="text-danger promocodeError text-right mb-2"></div>';
            html += '<div class="text-right">' +
                '<div class="row">' +
                '<div class="col-md-9 font-weight-bold">Subtotal</div>' +
                '<div class="col-md-3">&#x20B9; ' + totalPriceDeciaml + '</div>' +
                '</div>';
            if (discountPercent != '0') {
                html += '<div class="row">' +
                    '<div class="col-md-9 font-weight-bold">Discount<span class="text-success"> (' + discountPercent + sign + 'discount) </span></div>' +
                    '<div class="col-md-3 d-flex align-items-center justify-content-between">&#x20B9;' + discountAmount + '<i class="bi bi-x text-danger removePromoCode ml-2"></i></div>' +
                    '</div>';
            }
            html += '<div class="row">' +
                '<div class="col-md-9 font-weight-bold">Payable Amount</div>' +
                '<div class="col-md-3">&#x20B9; ' + payableAmount + '</div>' +
                '</div>' +
                '</div>';
            html += '<input type="hidden" id="totalPriceDeciaml" name="totalPriceDeciaml" value="' + totalPriceDeciaml + '">';
            html += '<input type="hidden" id="payableAmount" value="' + payableAmount + '">';
        } else {
            html = '<div class="d-flex align items-center justify-content-center h2">No items in cart</div>';
        }
        $(".cartPopUpContainer").html(html);
    }

    function removeCartItems(cart_items_id = '') {
        $.ajax({
            url: baseUrl + 'remove-cart-items',
            type: 'POST',
            data: {
                cart_items_id: cart_items_id,
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    fetchCartItems();
                }
            }
        });
    }
})
