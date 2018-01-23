<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public function tag_relation()
    {
    	return $this->hasMany('app\tag_relation');
    } 
}
