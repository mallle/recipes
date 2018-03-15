<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;

class Description extends Model
{
	public function recipe()
	{
		return $this->belongsTo('App\Recipe');
	}
}
