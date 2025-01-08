function fetchCategories() {
        $.ajax({
            url: baseUrl + 'fetchCategoryLists',
            type: 'GET',
            success: function(response) {
                let options = '<option value="">Select Category</option>';
                response.forEach(category => {
                    options += `<option value="${category.category_id}">${category.category_name.trim()}</option>`;
                });
                $('#select1').html(options);
            },
            error: function(error) {
                console.error("Error fetching categories:", error);
            }
        });
    }


    $('#select1').on('change', function() {
        const category_id = $(this).val();
        if (category_id) {
            $.ajax({
                url: baseUrl + `fetchLevelLists/${category_id}`,
                type: 'GET',
                success: function(response) {
                    let options = '';
                    response.forEach((level, index) => {
                        options += `<option value="${level.level_id}" ${index === 0 ? 'selected' : ''}>${level.level_name.trim()}</option>`;
                    });
                    $('#select2').html(options);

                    $('#select2').trigger('change');
                },
                error: function(error) {
                    console.error("Error fetching levels:", error);
                }
            });
        } else {
            $('#select2').html('<option value="">Select Level</option>');
        }
    });


    $('#submit').on('click', function() {
        const level_id = $('#select2').val();
        if (level_id) {
            $.ajax({
                url: baseUrl + `fetchTypeLists/${level_id}`,
                type: 'GET',
                success: function(response) {
                    if (response.length > 0) {
                        const planContainer = document.createElement('div');
                        planContainer.classList.add('card-container');

                        response.forEach(plan => {
                            const card = document.createElement('div');
                            card.classList.add('card');
                            card.innerHTML = `
                            <div class="card-title">${plan.type_name}</div>
                            <button class="card-btn view-product" data-type-id="${plan.type_id}" data-level-id="${plan.level_id}">View Products</button>
                            <button class="card-btn download-schedule" data-schedule="${plan.schedule_file}">
                                <i class="fas fa-download"></i> Download Schedule
                            </button>
                        `;
                            planContainer.appendChild(card);
                        });

                        $('#contentArea').html(planContainer);
                    } else {
                        alert('No plans found for the selected level!');
                    }
                },
                error: function(error) {
                    console.error("Error fetching types:", error);
                }
            });
        } else {
            alert('Please select a level before submitting!');
        }
    });
    $(document).on('click', '.view-product', function() {
        const type_id = $(this).data('type-id');
        const level_id = $('#select2').val();

        if (type_id && level_id) {
            $.ajax({
                url: baseUrl + `fetchSubjectLists/${type_id}/${level_id}`,
                type: 'GET',
                success: function(response) {
                    if (response.length > 0) {
                        const productContainer = document.createElement('div');
                        productContainer.classList.add('card-container');

                        response.forEach(subject => {
                            const card = document.createElement('div');
                            card.classList.add('card');
                            card.innerHTML = `
        <div class="card-title">${subject.subject_name}</div>
        <div class="card-price">
            <span class="offer-price">Price: ₹${subject.offer_price}</span>
            <span class="original-price" style="text-decoration: line-through; color: gray; margin-left: 10px;">
                ₹${subject.original_price}
            </span>
        </div>
        <button class="card-btn add-to-cart-btn" data-subject-id="${subject.subject_id}">
            Add to Cart
        </button>
         <button class="card-btn addBuyNowBtn" data-subject-id="${subject.subject_id}">
            Checkout
        </button>
    `;
                            productContainer.appendChild(card);
                        });

                        const backButton = document.createElement('button');
                        backButton.classList.add('back-btn');
                        backButton.textContent = 'Go Back';
                        backButton.onclick = function() {
                            $('#contentArea').html('');
                        };

                        productContainer.insertBefore(backButton, productContainer.firstChild);

                        $('#contentArea').html(productContainer);
                    } else {
                        alert('No subjects found for the selected plan.');
                    }
                },
                error: function(error) {
                    console.error('Error fetching subjects:', error);
                }
            });
        } else {
            alert('Invalid type or level selected.');
        }
    });

    function addtoCart(subject_id = '', btn_type) {
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
                            callback: function() {
                                window.location.href = baseUrl + 'auth?auth=login';
                            }
                        });
                    }
                }
            });
        }
    }


    $(document).on('click', '.add-to-cart-btn', function() {
        var subjectId = $(this).data('subject-id');
        addtoCart(subjectId, 'addtocart');
    });
    $(document).on('click', '.addBuyNowBtn', function() {
        var subject_id = $(this).data('subject-id');
        addtoCart(subject_id, 'buynow');
    });
    
    function scrollToBottom() {
        document.getElementById('modal').scrollTo({
            top: document.getElementById('modal').scrollHeight,
            behavior: 'smooth'
        });
    }


    function openModal() {
        document.getElementById('modal').style.display = 'flex';
        fetchCategories();
    }


    function closeModal() {
        document.getElementById('modal').style.display = 'none';
        document.getElementById('contentArea').innerHTML = '';
    }
