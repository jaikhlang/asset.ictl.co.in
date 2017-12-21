<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Payment;

class PageController extends Controller
{
    //Index Page
    public function index(){
      return view('pages.index');
    }

    //Index Page
    public function paper(){
      return view('pages.paper');
    }

    //Registration Page
    public function registration(){
      if(Auth::check()){
        $user = Auth::user();
        if($user->payment == 'paid'){
          $request_id = $user->payment_request_id;
          return redirect()->route('registration.success', $request_id);
        }
        return redirect()->route('payments.pay');
      }
      return view('pages.registration');
    }

    //Committee Page
    public function committee(){
      return view('pages.committee');
    }

    //Contact Page
    public function contact(){
      return view('pages.contact');
    }

    //Sponsor Page
    public function sponsor(){
      return view('pages.sponsor');
    }

    //Know About The Asset
    public function knowAsset(){
      return view('pages.about');
    }

    //Know About CIT & BU
    public function knowAbout(){
      return view('pages.about');
    }

    
}
