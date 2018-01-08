<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use Auth;
use App\User;
use Session;
use App\Payment;

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
      }elseif ($user->category == 'otherstudent') {
        $fee = 1500;
        $latefee = 2000;
      }
      elseif ($user->category == 'researcher') {
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
      //dd($request);
      $user = Auth::user();
      $user = User::find($user->id);
      $user->fee = $request->fee;

      $parameters = [
      //'txnid' => time().rand(11,99),
      'purpose' => 'ASSET 2018 Registration Fees',
      'buyer_name' => $user->name,
      'email' => $user->email,
      'phone' => $user->phone,
      'buyer_phone' => $user->phone,
      'allow_repeated_payments' => false,
      //'order_id' => '1232212',
      'amount' => $user->fee,
      'currency' => 'INR',
      'send_email' => true,
      'send_sms' => false,
      'webhook' => url('registration-payment/response/webhook'),
    ];

      //dd($parameters);
      $order = Indipay::gateway('InstaMojo')->prepare($parameters);
      //dd($order);
      return Indipay::process($order);
    }


    //Store Response
    public function response(Request $request){
        $response = Indipay::gateway('InstaMojo')->response($request);

        if($response->success){
          $paymentDetails = $response->payment_request;
          $paidDetails = $paymentDetails->payment;

            $user = Auth::user();
            $user = User::find($user->id);

            $payment = new Payment;
            $payment->user_id = $user->id;
            $payment->name = $paidDetails->buyer_name;
            $payment->email = $paidDetails->buyer_email;
            $payment->phone = $paidDetails->buyer_phone;
            $payment->request_id = $paymentDetails->id;
            $payment->payment_id = $paidDetails->payment_id;
            $payment->currency = $paidDetails->currency;
            $payment->amount = $paidDetails->amount;

            //Gateway fee
            $payment->gateway_fees = $paidDetails->fees;

            /* Uncomment if not using webhook
            if($payment->save()){
                $user->payment_request_id = $paymentDetails->id;
                $user->payment = "paid";
                $user->payment()->associate($payment);
                $user->save();
                $paymentRequestId = $user->payment_request_id;
                return redirect()->route('registration.success', $paymentRequestId);
            }
            */

            return redirect()->route('registration.success', $paymentDetails->id);

        }
        else{
            return redirect()->route('registration.failure');
        }
    }



    //Webhook
    public function webhook(){
      $data = $_POST;
      $mac_provided = $data['mac'];  // Get the MAC from the POST data
      unset($data['mac']);  // Remove the MAC key from the data.

      $ver = explode('.', phpversion());
      $major = (int) $ver[0];
      $minor = (int) $ver[1];

      if($major >= 5 and $minor >= 4){
           ksort($data, SORT_STRING | SORT_FLAG_CASE);
      }
      else{
           uksort($data, 'strcasecmp');
      }

      // You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
      // Pass the 'salt' without the <>.
      $mac_calculated = hash_hmac("sha1", implode("|", $data), "f224e6d5f31a49f7a32bf50db1b26413");

      if($mac_provided == $mac_calculated){
          //echo "MAC is fine";
          // Do something here
          if($data['status'] == "Credit"){
             // Payment was successful, mark it as completed in your database
             $user = User::where('email', $data['buyer'])->first();
             $payment = Payment::where('user_id', $user->id)->first();

             if(empty($payment)){
               $payment = new Payment;
               $payment->user_id = $user->id;
               $payment->name = $data['buyer_name'];
               $payment->email = $data['buyer'];
               $payment->phone = $data['buyer_phone'];
               $payment->request_id = $data['payment_request_id'];
               $payment->payment_id = $data['payment_id'];
               $payment->currency = $data['currency'];
               $payment->amount = $data['amount'];
               $payment->gateway_fees = $data['fees'];

               if($payment->save()){
                   $user->payment_request_id = $data['payment_request_id'];
                   $user->payment = "paid";
                   $user->payment()->associate($payment);
                   $user->save();
               }
             }else{
               $payment = Payment::where('user_id', $user->id)->first();
               $user->payment_request_id = $data['payment_request_id'];
               $user->payment = "paid";
               $user->payment()->associate($payment);
               $user->save();
             }
          }
          else{
             //Payment was unsuccessful, mark it as failed in your database
             //Do nothing
          }
      }
      else{
          //echo "Invalid MAC passed";
      }
    }


    //Print Invoice
    public function printInvoice(){
      if(Auth::check()){
        $user = Auth::user();
        //dd($user);
        $payment = Payment::where('id', $user->payment_id)->first();

        return view('prints.invoice')->withPayment($payment);
      }
      return redirect()->route('login');
    }

    //Print Application
    public function printApplication(){
      if(Auth::check()){
        $user = Auth::user();
        //dd($user);
        $payment = Payment::where('id', $user->payment_id)->first();

        return view('prints.application')->withPayment($payment);
      }
      return redirect()->route('login');
    }

}
