<?php

namespace App\Models;

use App\Core\Model;

class Movie extends Model {
	public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}