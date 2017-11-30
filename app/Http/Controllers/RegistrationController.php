<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use Seeion;
use Storage;

class RegistrationController extends Controller
{
    //Storing Participant
    public function registerSubmit(Request $request){
      $this->validate($request, [
          'group' => 'required',
          'name' => 'required|max:255',
          'designation' => 'required|max:255',
          'organisation' => 'required|max:255',
          'address' => 'required|max:255',
          'pin' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
          'paper' => 'max:255',
      ]);

      $user = Auth::user();
      $participant = User::find($user->id);
      $participant->group = $request->group;
      $participant->name = $request->name;
      $participant->designation = $request->designation;
      $participant->organisation = $request->organisation;
      $participant->address = $request->address;
      $participant->pin = $request->pin;
      $participant->email = $request->email;
      $participant->phone = $request->phone;
      $participant->paper_title = $request->paper;

      if($request->hasFile('profileImg')){
          //Add New image
          $image = $request->file('profileImg');
          $filename = $participant->name . time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('uploads/img/' . $filename);
          Image::make($image)->resize(320, 320)->save($location);
          $oldFilename = $participant->image;
          //Update the database
          $participant->image = $filename;
          //Delete the oid image
          Storage::delete($oldFilename);
      }

      //$request->session()->put('participant', $participant);
      dd($participant);
      if($participant->save()){
        Session::flash('message', 'You have successfully applied for the conference.');
        return redirect()->route('payments.billing');
      }
    }
}
