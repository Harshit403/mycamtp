$(document).ready(function() {
    $(".getSalesBtn").on('click', function() {
        var level_id = $("#level_id").val();
        var type_id = $("#type_id").val();
        var subject_id = $("#subject_id").val();
        var from_date = $("#from_date").val();
        var to_date = $("#to_date").val();
        $.ajax({
            url: baseUrl + 'admin/get-sales',
            type: 'POST',
            data: {
                level_id: level_id,
                type_id: type_id,
                subject_id: subject_id,
                from_date: from_date,
                to_date: to_date,
            },
            dataType: 'json',
            success: function(response) {
                var html = '';
                if (response !== null) {
                    var cartItems = {};
                    var sales_total = 0;
                    $.each(response.fetchedCartItemsGroup, function(j, k) {
                        cartItems[k.purchase_id] = k.total_items_count;
                    });
                    $.each(response.fetchSalesInfo, function(i, v) {
                        var sale_discount_amt = 0;
                        var discountLabel = '%';
                        if (v.discount_type == 'percent') {
                            sale_discount_amt = v.offer_price - (v.offer_price * v.discount / 100);
                            discountLabel = '%';
                        } else if (v.discount_type == 'amount') {
                            sale_discount_amt = v.offer_price - (v.discount / cartItems[v.purchase_id]);
                            discountLabel = '&#8377;';
                        }
                        html += '<tr>';
                        html += '<td>' + v.enrolment_date + '</td>';
                        html += '<td>' + v.student_name + '</td>';
                        html += '<td>' + v.payment_request_id + '</td>';
                        html += '<td>' + v.subject_name + '</td>';
                        html += '<td>' + v.level_name + '</td>';
                        html += '<td>' + v.type_name + '</td>';
                        html += '<td>' + v.offer_price + '</td>';
                        html += '<td>' + (v.promo_code_name + ' (' + v.discount + discountLabel) + ')' + '</td>';
                        html += '<td>' + v.payment_mode + '</td>';
                        html += '<td>' + sale_discount_amt + '</td>';
                        html += '<td>' + v.purchase_date + '</td>';
                        html += '</tr>';
                        sales_total = Number(sales_total) + Number(sale_discount_amt);
                    });
                    $("#total_sales_amt").html('&#8377; ' + sales_total.toFixed(2));
                    $("#sales_body").html(html);
                }
            }
        });
    });

});