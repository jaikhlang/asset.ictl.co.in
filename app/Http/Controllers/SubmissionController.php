<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
  //Paper Submission
  public function submission(){
    return view('papers.submission');
  }

  //
  public function submitPaper(Request $request){
    dd($request);
  }
}
