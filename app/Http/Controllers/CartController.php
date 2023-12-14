<?php
namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        try {
            // Fetch the product by ID from the database
            $product = Product::findOrFail($id);

            // Check if the product exists
            if ($product) {
                // Example: Add the product to the cart_items table using the CartItem model
                CartItem::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $product->product_id, // Use the correct field name
                    'quantity' => 1,
                    'total' => $product->price,
                ]);

                // Redirect to the index page with the category ID
                return redirect()->back()->with('success', 'Product added to the cart successfully!');
            }
        } catch (ModelNotFoundException $e) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found!');
        }
    }


    public function showCart()
    {
        $cartItems = CartItem::where('user_id', auth()->user()->id)->get();
        $totalPrice = $cartItems->sum('total');

        return view('cart', compact('cartItems', 'totalPrice'));
    }

    public function removeFromCart($id)
    {
        $cartItem = CartItem::find($id);

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Product removed from the cart successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in the cart!');
    }
}


