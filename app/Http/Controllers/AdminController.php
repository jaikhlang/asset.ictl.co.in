<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Payment;
use App\Paper;
use Excel;

class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('role:superadministrator|administrator');
  }

  //List all papers

  public function listPapers(){
    $papers = Paper::all();
    return view('backend.papers')->withPapers($papers);
  }


    //List all the paid/registered applicant

    public function listRegistered(){


      $all = User::orderBy('id', 'desc')->where('payment', 'paid')->distinct()->paginate(400);

      $students = User::orderBy('id', 'desc')->where('payment', 'paid')->where('category', 'student')->paginate(400);

      $otherstudents = User::orderBy('id', 'desc')->where('payment', 'paid')->where('category', 'otherstudent')->paginate(400);

      $researchers = User::orderBy('id', 'desc')->where('payment', 'paid')->where('category', 'researcher')->paginate(400);

      $academicians = User::orderBy('id', 'desc')->where('payment', 'paid')->where('category', 'academician')->paginate(400);

      $corporates = User::orderBy('id', 'desc')->where('payment', 'paid')->where('category', 'corporate')->paginate(400);
      $unpaids = User::orderBy('id', 'desc')->where('payment', 'unpaid')->paginate(400);

      return view('backend.index')->withAll($all)
                                  ->withStudents($students)
                                  ->withOtherstudents($otherstudents)
                                  ->withResearchers($researchers)
                                  ->withAcademicians($academicians)
                                  ->withCorporates($corporates)
                                  ->withUnpaids($unpaids);
    }

    public function createRegisteredExcel(){

      $users = User::orderBy('id', 'desc')->join('payments', 'payments.user_id', '=', 'users.id')
      	->where('users.payment', '=', 'paid')
        ->select('users.id','users.name', 'users.email', 'users.category', 'users.designation',
                  'users.address', 'users.phone', 'payments.payment_id', 'payments.amount', 'payments.gateway_fees')
      	->distinct()->get();
      Excel::create('Paid Delegate List', function($excel) use($users) {
          $excel->sheet('Paid List Sheet', function($sheet) use($users) {
              $sheet->fromArray($users)->setOrientation('landscape');
          });
      })->export('xls');
    }

    public function createSubmittedExcel(){
      $papers = Paper::orderBy('id', 'desc')->get();

      Excel::create('Paper List', function($excel) use($papers) {
          $excel->sheet('Paper List Sheet', function($sheet) use($papers) {
              $sheet->fromArray($papers)->setOrientation('landscape');
          });
      })->export('xls');
    }
}
