<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Payment;
use Auth;
use Image;
use Session;
use Storage;
use Hash;

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
          'phone' => 'required|digits:10',
          'paper' => 'max:255',
      ]);

      $participant = new User;

      $participant->category = $request->group;
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

      if ($request->has('password') && !empty($request->password)) {
        $password = trim($request->password);
      }else{
        //Set the manual password

        $length = 10;
        $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWZYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i <$length; ++$i) {
          $str .= $keyspace[random_int(0, $max)];
        }
        $password = $str;
      }
      $participant->password = Hash::make($password);
      $request->session()->put('participant', $participant);

      if($participant->save()){
        $role = Role::where('name', 'participant')->first();
        $participant->attachRole($role);

        if(Auth::attempt(['email' => $participant->email, 'password' => $password])){
          Session::flash('message', 'Application successfully submitted. Proceed with payment.');
          return redirect()->route('payments.billing');
        }
      }
    }

    public function success($id){
      $payment = Payment::get()->where('request_id', $id)->first();
      //dd($payment);
      $user = $payment->user;
      //dd($user);
      return view('payments.success')->withUser($user);
    }

    public function failure(){
      $user = Auth::user();
      return view('payments.failure')->withUser($user);
    }

}
