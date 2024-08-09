$(document).ready(function() {
    $(".getSalesBtn").on('click', function() {
        var level_short_name = $("#level_short_name").val();
        var type_short_name = $("#type_short_name").val();
        var subject_short_name = $("#subject_short_name").val();
        var from_date = $("#from_date").val();
        var to_date = $("#to_date").val();
        $.ajax({
            url: baseUrl + 'admin/get-sales',
            type: 'POST',
            data: {
                level_short_name: level_short_name,
                type_short_name: type_short_name,
                subject_short_name: subject_short_name,
                from_date: from_date,
                to_date: to_date,
            },
            dataType: 'json',
            success: function(response) {
                var html = '';
                if (response !== null) {
                    var total_sales_amt = 0;
                    $.each(response.fetchSalesInfo, function(i, v) {
                        var salesAmt = 0;
                        var discount_type = v.discount_type;
                        var discount_amt = v.discount_amt;
                        var offer_price = v.offer_price;
                        if (discount_type == 'percent') {
                            salesAmt = offer_price - (offer_price * (discount_amt / 100));
                        } else if (discount_type == 'amount') {
                            salesAmt = offer_price - discount_amt;
                        }
                        total_sales_amt = Number(salesAmt) + Number(total_sales_amt);
                        html += '<tr>' +
                            '<td>' + v.date_of_enrollment + '</td>' +
                            '<td>' + v.student_name + '</td>' +
                            '<td>' + v.link_id + '</td>' +
                            '<td>' + v.subject_name + '</td>' +
                            '<td>' + v.level_name + '</td>' +
                            '<td>' + v.type_name + '</td>' +
                            '<td>' + v.offer_price + '</td>' +
                            '<td>' + v.promo_code + '</td>' +
                            '<td>' + v.payment_mode + '</td>' +
                            '<td>' + salesAmt + '</td>' +
                            '<td>' + v.purchase_date + '</td>';
                        html += '</tr>';
                    });
                    $("#sales_body").html(html);
                    $("#total_sales_amt").html('&#8377; ' + total_sales_amt.toFixed(2));
                }
            }
        });
    });

    $("#level_short_name").on('change', function() {
        var level_short_name = $(this).val();
        var sales_info = JSON.parse($.trim($(".salesInfo").text()));
        var html = '';
        $.each(sales_info, function(i, v) {
            if (v.level_short_name == level_short_name) {
                html += '<option value="' + v.type_short_name + '">' + v.type_name + '</option>';
            }
        });
        $("#type_short_name").append(html);
    });
    $("#type_short_name").on('change', function() {
        var type_short_name = $(this).val();
        var sales_info = JSON.parse($.trim($(".salesInfo").text()));
        var html = '';
        $.each(sales_info, function(i, v) {
            if (v.type_short_name == type_short_name) {
                html += '<option value="' + v.subject_short_name + '">' + v.subject_name + '</option>';
            }
        });
        $("#subject_short_name").append(html);
    })

});