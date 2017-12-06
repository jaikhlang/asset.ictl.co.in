<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use Auth;
use App\User;

class PaymentController extends Controller
{
    //Show Form Billing Info Input
    public function billingInfo(){

      $user = Auth::user();
      $user = User::find($user->id);

      $fee = 0;
      $latefee = 0;
      if($user->category == 'student'){
        $fee = 1000;
        $latefee = 1500;
      }elseif ($user->category == 'researcher') {
        $fee = 2000;
        $latefee = 2500;
      }elseif ($user->category == 'academician') {
        $fee = 3000;
        $latefee = 3500;
      }elseif ($user->category == 'corporate') {
        $fee = 4000;
        $latefee = 4500;
      }

      /*UPDATE
      payment
      payment_id
      payment_request_id
      */
      return view('payments.billing')->withUser($user)->withFee($fee)->withLatefee($latefee);
    }

    public function payNow(Request $request){
      dd($request);
      $user = Auth::user();
      $user = User::find($user->id);
      $order = Indipay::gateway('InstaMojo')->prepare($parameters);
      return Indipay::process($order);
    }
}
