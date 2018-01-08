<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\SubmissionEmail;

class Paper extends Model
{
    //
    public function user(){
      return $this->belongsTo('App\User');
    }
}
