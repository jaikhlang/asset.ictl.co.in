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
      return view('payments.billing')->withUser($user)->withFee($fee)->withLatefee($latefee);
    }


    //Post Payment
    public function payNow(Request $request){
      dd($request);
      $user = Auth::user();
      $user = User::find($user->id);
      $user->fee = $request->fee;
      
      $parameters = [
      //'txnid' => time().rand(11,99),
      'purpose' => 'ASSET 2018 Registration Fees',
      'buyer_name' => $user->name,
      'email' => $user->email,
      'buyer_phone' => $user->phone,
      'allow_repeated_payments' => false,
      //'order_id' => '1232212',
      'amount' => $user->fee,
      'currency' => 'INR',
      'send_email' => true,
      'send_sms' => false,
    ];
      $order = Indipay::gateway('InstaMojo')->prepare($parameters);
      return Indipay::process($order);
    }


    //Store Response (Use webhook)
    public function response(Request $request){
        $response = Indipay::gateway('InstaMojo')->response($request);

        if($response->success){
          $paymentDetails = $response->payment_request;
          $paidDetails = $paymentDetails->payment;

            $payment = new Payment;
            $payment->name = $paidDetails->buyer_name;
            $payment->email = $paidDetails->buyer_email;
            $payment->phone = $paidDetails->buyer_phone;
            $payment->request_id = $paymentDetails->id;
            $payment->payment_id = $paidDetails->payment_id;
            $payment->currency = $paidDetails->currency;
            $payment->amount = $paidDetails->amount;
            $payment->fees = $paidDetails->fees;

            $payment->save();

            $participant = new Participant;
            $participant = Session::get('participant');
            $participant->payment_request_id = $paymentDetails->id;

            $participant->payment()->associate($payment);
            $participant->save();

            $paymentRequestId = $participant->payment_request_id;

            Session::forget('participant');
            return redirect()->route('registration.success', $paymentRequestId);
        }
        else{
            Session::forget('participant');
            return redirect()->route('registration.failed');
        }
    }
}
