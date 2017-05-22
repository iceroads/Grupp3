<?php

namespace App\Models;

use App\Core\Model;

class Movie extends Model {

	protected $fillable = [ "titel", "producer", "writer", "rate", "trailer", "release_year", "info", "bild", "genre" ];

	public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}