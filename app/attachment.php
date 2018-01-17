<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
	public function announcement()
	{
		return $this->belongsTo('app\announcement');
	}
}
