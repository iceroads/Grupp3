<?php

namespace App\Models;

use App\Core\Model;

class Role extends Model {
	protected $fillable = [ "roll", "created_at", "updated_at" ];
	protected $id;
	protected $roll;
	protected $created_at;
	protected $updated_at;



	public function peoples()
	{
        return $this->belongsToMany('App\Models\People');
    }
}
