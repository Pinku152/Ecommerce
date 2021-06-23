<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function index(){
        /*
        $categories = Category::all();
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();

        return view('order.index',['products'=>$products,'categories'=>$categories]);
        */
        $orders = Order::all();
        return view('admin.order.index',['orders'=>$orders]);
    }
    public function edit($id){
        $order = Order::find($id);
        return view('admin.order.edit',['order'=>$order]);
    }
    public function update(Request $request,$id){
        $order = Order::find($id);
        $order->update($request->all());
        $orders = Order::all();
        //return view('order.index')->with('order',$order);
        return view('admin.order.index',['orders'=>$orders]);
    }
    function orderNow()
    {
        $categories = Category::all();
        //$userId=Session::get('user')['id'];
        $userId = Auth::user()->id;
        $total= $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');

        return view('checkout',['total'=>$total,'categories'=>$categories]);
    }

    function orderPlace(Request $req)
    {
        //$userId=Session::get('user')['id'];
        $userId = Auth::user()->id;
        $allCart= Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="succeed";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('stripe');
    }
    function myOrders()
    {
        $categories = Category::all();
        $userId = Auth::user()->id;
        //$userId=Session::get('user')['id'];
        $orders= DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

        return view('order',['categories'=>$categories,'orders'=>$orders]);
    }
}
