<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Chirp extends Model
{
	protected $table = 'chirps';

    protected $fillable = ['chirp', 'user_id'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
