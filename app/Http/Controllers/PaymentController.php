<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //Show Form Billing Info Input
    public function billingInfo(){
      return view('payments.billing');
    }
}
