<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-3">
                <label for="products">Products <span class="text-danger">*</span></label>
                <select class="form-control tagging" name="products" id="products" required>
                    <option value="">Select a product</option>
                    @foreach ($products as $product)
                    <option value="{{ $product->id }}">
                        {{ $product->name }}
                    </option>
                    @endforeach
                </select>            
            </div>
            <div class="col-sm-6 col-lg-3 mb-3">
                <label for="price">Price <span class="text-danger">*</span></label>
                <select class="form-control tagging" name="price" id="price" readonly>
                </select>
            </div>
            <div class="col-sm-6 col-lg-2 mb-3">
                <label for="quantity">Quantity <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="quantity" id="quantity" required>
            </div>
            <div class="col-sm-6 col-lg-2 mb-3">
                <label for="total_amount">Total Amount <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="total_amount" id="total_amount" readonly>
            </div>
            <div class="col-sm-6 col-lg-2 mb-3 d-flex align-items-end">
                <button class="btn btn-info btn-block" id="add-button">Add</button>
            </div>
        </div>
        <form action="/product/store" method="post">
            @csrf
        <div class="row">
            <table class="table table-danger" id="product-table">
                <thead>
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-end" >
            <div class="col-sm-6 col-lg-2 mb-3 align-end">
                <label for="total_product_price">Total Product Amount <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="total_product_price" id="total_product_price" readonly>
            </div>
        </div>
        <div class="row justify-content-end" >
            <div class="col-sm-6 col-lg-2 mb-3 align-end">
                <label for="gst">GST (%) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="gst" id="gst" readonly>
            </div>
        </div>
        <div class="row justify-content-end" >
            <div class="col-sm-6 col-lg-2 mb-3 align-end">
                <label for="discount">Discount <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="discount" id="discount" readonly>
            </div>
        </div>
        <div class="row justify-content-end" >
            <div class="col-sm-6 col-lg-2 mb-3 align-end">
                <label for="final_price">Final price <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="final_price" id="final_price" readonly>
            </div>
        </div>
        <div class="row justify-content-end" >
            <div class="col-sm-6 col-lg-2 mb-3 align-end">
                <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
            </div>
        </div>
    </form>
    </div>
   
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    </body>
</html>
