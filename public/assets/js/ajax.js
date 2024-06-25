$(document).ready(function() {
    $('#products').change(function() {
        var productId = $(this).val();
        if (productId) {
            $.ajax({
                url: '/fetch-product-price/' + productId,
                type: 'GET',
                success: function(data) {
                    $('#price').empty();
                    $('#price').append('<option value="' + data.price + '">' + data.price + '</option>');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching price:', error);
                }
            });
        } else {
            $('#price').empty();
        }
    });

    $('#quantity').keyup(function() {
    var quantity = $(this).val();
    if(quantity) {
        var price = parseFloat($('#price').val());  
        var totalAmountElement = $('#total_amount');
        var totalAmount = quantity * price;
        totalAmountElement.val(totalAmount);  
    } else {
        $('#total_amount').val('');  
    }
});
$('#add-button').click(function() {
    var productName = $('#products option:selected').text();
    var price = parseFloat($('#price').val());
    var quantity = parseInt($('#quantity').val());
    var totalAmount = price * quantity;
    if ( !isNaN(price) && !isNaN(quantity)) {
        $('#product-table tbody').append(`
            <tr>
                <td>${productName}</td>
                <td>${price}</td>
                <td>${quantity}</td>
                <td>${totalAmount}</td>
            </tr>
        `);
        calculateTotalAmount();
        $('#products').val('');
        $('#price').val('');
        $('#quantity').val('');
        $('#total_amount').val('');
   

    } else {
        alert('Please select a product and enter valid price and quantity.');
    }
});

function calculateTotalAmount() {
    var total = 0;
    $('#product-table tbody tr').each(function() {
        var rowTotal = parseFloat($(this).find('td:last').text());
        total += isNaN(rowTotal) ? 0 : rowTotal;
    });

    $('#total_product_price').val(total.toFixed(2));
   if(!isNaN(total)){
    $.ajax({
        url : '/apply-discount/' + total,
        type : 'GET',
        success:function(data){
            $('#discount').val(data.discount);
            calculateFinalPriceForAllProducts(total,data.discount);
        },
        error:function(xhr,status,error){
            console.error('Error fetching discount:', error);
        }

    })
   }
}
 function calculateFinalPriceForAllProducts(totalAmount,discount){
    var gstPercentage = 0.05; 

    var gstAmount = totalAmount * gstPercentage;
    var discountedAmount = totalAmount - discount;
    var finalPrice = discountedAmount + gstAmount;
   $('#gst').val(gstAmount.toFixed(2));
    $('#final_price').val(finalPrice.toFixed(2));

}

});