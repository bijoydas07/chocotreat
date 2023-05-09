<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $sliders = Slider::where('status', '0')->get();
        return view('frontend.index', compact('products', 'sliders'));
    }

    public function product()
    {
        $products = Product::all();
        return view('frontend.product', compact('products'));
    }

    public function singleProduct(Product $product)
    {
        return view('frontend.single-product', compact('product'));
    }


    public function cartProduct(Request $request, Product $product)
    {
        if (Auth::check()) {

            $user_id = Auth::user()->id;
            $cart = new Cart;

            $cart->product_id = $product->id;
            $cart->user_id = $user_id;
            $cart->product_name = $product->name;
            $cart->quantity = $request->quantity;
            $cart->price = $product->price;
            $cart->total_price = $cart->price * $request->quantity;
            $cart->image = $product->image;
            
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('login');
        }

    }


    public function showCart()
    {
        if (Auth::check()) {

            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('frontend.cart', compact('cart'));

        } else {

            return redirect('login');
        }
        
    }


    public function removeCart(cart $cart)
    {
        try {
            $cart->delete();
            return redirect()->route('show.cart')->withMessage("Category successfully deleted!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

    public function updateCart(Request $request ,cart $cart)
    {
        try {
            $cart->update([
                'quantity' => $request->quantity,
            ]);
            return redirect()->route('show.cart')->withMessage("Category successfully deleted!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }


    public function userLogin()
    {
        return view('frontend.login');
    }


    public function userRegistration()
    {
        return view('frontend.registration');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }
    
}
