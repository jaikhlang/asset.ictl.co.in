<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //Storing Participant
    public function registerSubmit(Request $request){
      $this->validate($request, [
          'group' => 'required|max:255',
          'name' => 'required|max:255',
          'designation' => 'required|max:255',
          'organisation' => 'required|max:255',
          'address' => 'required|max:255',
          'pin' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
          'paper' => 'max:255',
      ]);

      $participant = new Participant;
      $participant->group = $request->group;
      $participant->name = $request->name;
      $participant->designation = $request->designation;
      $participant->organisation = $request->organisation;
      $participant->address = $request->address;
      $participant->pin = $request->pin;
      $participant->email = $request->email;
      $participant->phone = $request->phone;
      $participant->paper = $request->paper;

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

      if($participant->save()){
        Session::flash('message', 'You have successfully applied for the conference.');
        return redirect()->route('payments.billing');
      }
    }
}
