<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Message extends Model
{
    
  public function sender() {
    return $this->belongsTo('App\User', 'sender_id');
  }

  public function recipient() {
    return $this->belongsTo('App\User', 'recipient_id');
  }

  public function getCreatedAtAttribute($date){

 		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->toDayDateTimeString();
  }

  // Stumbled upon this while changing date formate might be good to
  // implement last updated section but not useful right now.

  // public function getUpdatedAtAttribute($date){

 	// 	return Carbon::createFromFormat('Y-m-d H:i:s', $date)->toFormattedDateString();
  // }
 

}
