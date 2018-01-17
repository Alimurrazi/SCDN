<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    public function attachment()
    {
    	return $this->hasMany('app\attachment');
    }
}
