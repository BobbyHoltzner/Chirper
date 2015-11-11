<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Chirp extends Model
{
	protected $table = 'chirps';

    protected $fillable = ['chirp', 'name'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
