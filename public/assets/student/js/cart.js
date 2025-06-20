$(document).ready(function () {
    // Add the animation CSS dynamically
    $('head').append(`
        <style>
            .mcs-cart-button {
                position: relative;
                transition: all 0.3s ease;
            }
            
            .cartCount {
                position: absolute;
                top: -8px;
                right: -8px;
                background: #ff4757;
                color: white;
                border-radius: 50%;
                width: 20px;
                height: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 12px;
                transition: all 0.3s ease;
            }
            
            .cart-pulse {
                animation: cartPulse 0.8s cubic-bezier(0.4, 0, 0.6, 1) 2;
            }
            
            .cart-bounce {
                animation: cartBounce 0.6s ease;
            }
            
            .cart-count-pop {
                animation: countPop 0.5s ease;
            }
            
            @keyframes cartPulse {
                0%, 100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.2);
                }
            }
            
            @keyframes cartBounce {
                0%, 100% {
                    transform: translateY(0);
                }
                30% {
                    transform: translateY(-10px);
                }
                60% {
                    transform: translateY(5px);
                }
            }
            
            @keyframes countPop {
                0% {
                    transform: scale(0);
                }
                80% {
                    transform: scale(1.2);
                }
                100% {
                    transform: scale(1);
                }
            }
            
            .plus-one {
                position: absolute;
                top: -25px;
                right: -15px;
                color: #4CAF50;
                font-weight: bold;
                font-size: 14px;
                opacity: 0;
                animation: floatUp 1s ease-out;
            }
            
            @keyframes floatUp {
                0% {
                    transform: translateY(0);
                    opacity: 1;
                }
                100% {
                    transform: translateY(-30px);
                    opacity: 0;
                }
            }
        </style>
    `);

    $(".addToCartBtn").on('click', function () {
        var subject_id = $(this).data('subject-id');
        addtoCart(subject_id);
    });

    $(".addBuyNowBtn").on('click', function () {
        var subject_id = $(this).data('subject-id');
        addtoCart(subject_id, 'buynow');
    })

    function updateCartCount(newCount) {
        const $cartBtn = $('.showCartBtn');
        const $cartCount = $('.cartCount');
        const currentCount = parseInt($cartCount.text()) || 0;
        
        // Update the count
        $cartCount.text(newCount);
        
        // Only animate if the count increased
        if (newCount > currentCount) {
            // Clear any existing animations
            $cartBtn.removeClass('cart-pulse cart-bounce');
            $cartCount.removeClass('cart-count-pop');
            $('.plus-one').remove();
            
            // Add the "+1" indicator
            if (newCount - currentCount === 1) {
                $cartBtn.append('<span class="plus-one">+1</span>');
            } else {
                $cartBtn.append(`<span class="plus-one">+${newCount - currentCount}</span>`);
            }
            
            // Trigger animations
            $cartBtn.addClass('cart-pulse');
            $cartCount.addClass('cart-count-pop');
            
            // After a delay, add the bounce effect
            setTimeout(() => {
                $cartBtn.addClass('cart-bounce');
            }, 300);
            
            // Remove animation classes after they complete
            setTimeout(() => {
                $cartBtn.removeClass('cart-pulse cart-bounce');
                $cartCount.removeClass('cart-count-pop');
            }, 1000);
        }
        
        // Make cart more visible if it was empty
        if (currentCount === 0 && newCount > 0) {
            $cartBtn.css({
                'transform': 'scale(1.1)',
                'color': '#ff4757'
            });
            
            setTimeout(() => {
                $cartBtn.css({
                    'transform': 'scale(1)',
                    'color': ''
                });
            }, 1000);
        }
    }

    function addtoCart(subject_id = '', btn_type = 'addtocart') {
        if (subject_id == '') {
            bootbox.alert('Something went wrong');
            return false;
        } else {
            $.ajax({
                url: baseUrl + 'add-to-cart',
                type: 'POST',
                data: {
                    'subject_id': subject_id,
                },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        if (btn_type == 'addtocart') {
                            bootbox.alert({
                                message: response.message,
                                closeButton: false,
                                callback: function () {
                                    if (response.success) {
                                        updateCartCount(response.totalQty);
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
                                success: function (response) {
                                    if (response.success) {
                                        var ci_mode = 'sandbox';
                                        const cashfree = Cashfree({
                                            mode: ci_mode
                                        });
                                        let checkoutOptions = {
                                            paymentSessionId: response.payment_session_id,
                                            redirectTarget: "_self"
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
                            callback: function () {
                                window.location.href = baseUrl + 'auth?auth=login';
                            }
                        });
                    }
                }
            })
        }
    }

    $(".showCartBtn").on('click', function () {
        showCartItems();
    });
    
    $(document).on('click', '#checkoutButton', function () {
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
                    callback: function () {
                        bootbox.hideAll();
                    }
                },
                yes: {
                    label: '<i class="bi bi-cart-check"></i> Checkout',
                    className: 'btn-sm btn-success checkoutBtn',
                    callback: function () {
                        var billingCity = $(this).find('#billingCity').val();
                        var billingState = $(this).find('#billingState').val();

                        if (!billingCity || !billingState) {
                            bootbox.alert({
                                message: "Please enter both City and State before proceeding to checkout.",
                                closeButton: false
                            });
                            return false; 
                        }
                        var totalPayablePrice = $(this).find('#payableAmount').val();
                        if (totalPayablePrice == '0.00') {
                            $.ajax({
                                url: baseUrl + '/payment/free-payable-product',
                                type: 'GET',
                                dataType: 'json',
                                success: function (response) {
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
                                data: {
                                    billingCity: $(this).find('#billingCity').val(),
                                    billingState: $(this).find('#billingState').val()
                                },
                                success: function (response) {
                                    if (response.success) {
                                        var ci_mode = ciEnv == 'production' ? 'production' : 'sandbox';
                                        const cashfree = Cashfree({
                                            mode: ci_mode
                                        });
                                        let checkoutOptions = {
                                            paymentSessionId: response.payment_session_id,
                                            redirectTarget: "_self"
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
        
        dialog.init(function () {
            $(dialog).find('.checkoutBtn').hide();
            $(dialog).find('.cartPopUpContainer').on('click', '.removeCartItems', function () {
                var cart_items_id = $(this).data('cart-item-id');
                removeCartItems(cart_items_id);
            });
            
            setInterval(function () {
                var htmlVal = $('.cartPopUpContainer').html();
                displayButton = (htmlVal == '<div class="d-flex align items-center justify-content-center h2">No items in cart</div>') ? false : true;
                if (!displayButton) {
                    $(dialog).find('.checkoutBtn').hide();
                } else {
                    $(dialog).find('.checkoutBtn').show();
                }
            }, 800);
            
            $(dialog).find('.cartPopUpContainer').on('click', '.applyPromocodeBtn', function () {
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
                    success: function (response) {
                        if (response.success == false) {
                            $(dialog).find('.promocodeContainer').css('border', '1px solid red');
                            $(dialog).find('.promocodeError').html(response.message);
                            setTimeout(function () {
                                $(dialog).find('.promocodeContainer').css('border', 'transparent');
                                $(dialog).find('.promocodeError').html('');
                            }, 4000);
                        } else {
                            fetchCartItems();
                        }
                    }
                })
            });
            
            $(dialog).find(".cartPopUpContainer").on('click', '.removePromoCode', function () {
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
                            callback: function () {
                                $.ajax({
                                    url: baseUrl + 'promo/remove-promocode',
                                    type: 'POST',
                                    dataType: 'json',
                                    success: function (response) {
                                        bootbox.alert({
                                            message: response.message,
                                            closeButton: false,
                                            callback: function () {
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
        
        dialog.init(function () {
            console.log("Bootbox Dialog Initialized" + dialog);
            getBillAddress(dialog);
        });
    }

    fetchCartItems();

    function fetchCartItems() {
        $.ajax({
            url: baseUrl + 'fetch-active-cartitems',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    cartHTML(response.cartData);
                    updateCartCount(response.cartData.length);
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
            $.each(cartData, function (i, v) {
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

            html += '<div class="col-md-9 font-weight-bold billing-address">';
            html += '<div class="form-group">';
            html += '<label for="billingCity">Bill Address</label>';
            html += '<input type="text" class="form-control" id="billingCity" name="billingCity" placeholder="Enter your adddress">';
            html += '</div>';
            html += '<div class="form-group">';
            html += '<label for="billingState">State</label>';
            html += '<input type="text" class="form-control" id="billingState" name="billingState" placeholder="Enter your state">';
            html += '</div>';
            html += '</div>';
        } else {
            html = '<div class="d-flex align items-center justify-content-center h2">No items in cart</div>';
        }
        $(".cartPopUpContainer").html(html);
    }

    function getBillAddress(dialog) {
        $.ajax({
            url: baseUrl + 'get-billing-address',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    console.log('Response:', response);

                    dialog.init(function () {
                        console.log("Bootbox Dialog Initialized");

                        console.log('Billing');
                        var $billingCity = $(dialog).find('#billingCity');
                        var $billingState = $(dialog).find('#billingState');

                        if ($billingCity.length > 0) {
                            console.log("Billing City & State Found in DOM");
                            $billingCity.val(response.city_name).trigger("change");
                            $billingState.val(response.state_name).trigger("change");
                        } else {
                            console.log("Billing inputs not found in DOM!");
                        }
                    });
                }
            }
        });
    }

    getBillAddress();
    
    function removeCartItems(cart_items_id = '') {
        $.ajax({
            url: baseUrl + 'remove-cart-items',
            type: 'POST',
            data: {
                cart_items_id: cart_items_id,
            },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    fetchCartItems();
                }
            }
        });
    }
});
