<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Stripe;
use Session;
use App\Models\Order;

class StripePaymentController extends Controller
{
    //
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $response = Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "INR",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        //print_r($response);die;
        /*
        $order= new Order;
        $order->payment_status=$response['status'];
        $order->save();
        */
        Session::flash('success', 'Payment successful!');
        return back();
        //return redirect('/');
    }

}
