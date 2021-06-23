<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    function addToCart(Request $req)
    {
        /*
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
        */

        $user_id = Auth::user()->id;
        $cart = new Cart;
        $cart->user_id = $user_id;
        $cart->product_id = $req->product_id;
        $cart->save();
        return redirect('/home');
    }

    static function cartItem()
    {
        //$userId=Session::get('user')['id'];
        $userId = Auth::user()->id;
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $categories = Category::all();
        //$userId=Session::get('user')['id'];
        $userId = Auth::user()->id;
        $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();

        $total= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');


        return view('cart',['total'=>$total,'products'=>$products,'categories'=>$categories]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
