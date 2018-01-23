<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
        public function tag_relation()
    {
    	return $this->hasMany('app\tag_relation');
    }
}
