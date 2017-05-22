<?php

namespace App\Models;

use App\Core\Model;

class User extends Model {

	public function movies() {
		return $this->belongsToMany(\App\Models\Movie::class);
	}

	public function roles() {
		return $this->belongsToMany(\App\Models\Role::class);
	}
}