<?php

namespace App\Http\Controllers;

use App\Models\Colour;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id){
        $product = Product::findOrFail($id);
        $colour = Colour::findOrFail($request->colour);

        $item = [
            'product' => $product,
            'quantity' => $request->quantity,
            'colour' => $colour
            
        ];

        if(session()->has('cart')){

            $cart = session()->get('cart');
            $key = $this->checkItemInCart($item);

            if($key != -1){
                $cart[$key]['quantity'] += $request->quantity;
                session()->put('cart', $cart);
            }else{
                session()->push('cart', $item);
            }


        }else{
            session()->push('cart', $item);
        }

        return back()->with('addedToCart', 'Success! Product  has been added to cart');

    }

    public function CheckItemInCart($item){
        foreach(session()->get('cart') as $key => $val){
            if($val['product']['id'] == $item['product']['id'] && $val['colour']['id'] == $item['colour']['id']){
                return $key;
            }
        }
        return -1;
    }

    public function removeFromCart($key){
        if (session()->has('cart')){
            $cart = session()->get('cart');
            array_splice($cart, $key, 1);
            session()->put('cart', $cart);
            return back()->with('success', 'product Removed');
        }
        return back();
    }
}
