<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Payment;

class AdminController extends Controller
{
    //List all the paid/registered applicant
    public function listRegistered(){

      $delegates = Payment::orderBy('id', 'desc')->paginate(400);
      //$delegates = User::where('payment', 'paid')->get();
      //dd($delegates);
      return view('backend.index')->withDelegates($delegates);
    }
}
