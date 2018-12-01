<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Invitations extends Model
{
    protected $fillable = ["user_id", "rsvp", "plus_one", "invitation"];

    public function user() {
    	$this->belongsTo(User::class);
    }
}
