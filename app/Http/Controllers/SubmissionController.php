<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Paper;
use Image;
use Storage;
use Session;

class SubmissionController extends Controller
{
  //Paper Submission
  public function submission(){
    return view('papers.submission');
  }

  //
  public function postPaper(Request $request){
    $this->validate($request, [
        'authorname' => 'required|max:255',
        'organisation' => 'required|max:255',
        'address' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required|integer',
        'papertitle' => 'required|max:255',
        'paper' => 'required',
        'remarks' => 'max:255',
    ]);

    //Check for Paper Upload
    if($request->hasFile('paper')){
      $paper = new Paper;
      $file = $request->file('paper');
      $filename = $request->phone . rand(0,999) . '.' . $file->getClientOriginalExtension();
      $location = public_path('uploads/papers/');
      $file->move($location, $filename);
      $oldFilename = $paper->$file;
      $paper->file_name = $filename;
      Storage::delete($oldFilename);


      $paper->paper_title = $request->papertitle;
      $paper->paper_author = $request->authorname;
      $paper->author_organisation = $request->organisation;
      $paper->author_address = $request->address;
      $paper->author_email = $request->email;
      $paper->author_phone = $request->phone;

      if($paper->save()){
        Session::flash('success', 'You have successfully submitted your paper. After submission of paper each author must register (Online/Offline).');
        return redirect()->route('submission.success');
      }
    }
  }

  public function success(){
    return view('papers.success');
  }
}
