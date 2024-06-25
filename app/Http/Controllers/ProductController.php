<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Displays the form for adding products.
     *
     * Retrieves all products from the database and passes them
     * to the 'add-products' view for rendering.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function addProduct()
    {

        $products = product::all();
        return view('add-products', compact('products'));
    }

    /**
     * Fetches the price of a product based on its ID.
     *
     * Retrieves the product details from the database using the provided $productId.
     *
     * @param  int  $productId The ID of the product to fetch.
     * @return \Illuminate\Http\JsonResponse
     */

    public function fetchPrice($productId)
    {
        $product = Product::find($productId);

        return response()->json($product);
    }
    /**
     * Retrieves the applicable discount based on the total amount.
     *
     * Fetches the discount for the price
     *
     * @param  float  $total The total amount to apply for discount
     * @return \Illuminate\Http\JsonResponse
     */
    public function applyDiscount($total)
    {
        $discount = discount::where('price', '<=', $total)->orderBy('price', 'desc')->first();

        return response()->json($discount);
    }

    /**
     * Store a new product in the database..
     *
     * @param  \Illuminate\Http\Request  $request The HTTP request containing the product data.
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        dd($request->all());
    }
}
