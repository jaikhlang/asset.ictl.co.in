<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    //Know About The Host
    public function knowAbout(){
      return view('pages.about');
    }
}
