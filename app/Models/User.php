<?php

namespace App\Models;

use App\Core\Model;

class User extends Model {

	protected $fillable = [ "f_namn", "e_namn", "url", "birthdate", "info" ];

	public function movies() {
		return $this->belongsToMany(\App\Models\Movie::class);
	}

	public function roles() {
		return $this->belongsToMany(\App\Models\Role::class);
	}

	public function name() {
		return $this->f_namn . " " . $this->e_namn;
	}

}