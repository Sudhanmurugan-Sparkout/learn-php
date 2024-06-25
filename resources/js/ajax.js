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

        $('#products').val('');
        $('#price').val('');
        $('#quantity').val('');
        $('#total_amount').val('');

    } else {
        alert('Please select a product and enter valid price and quantity.');
    }
});


});