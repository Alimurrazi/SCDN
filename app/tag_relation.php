<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag_relation extends Model
{
    public function blog()
    {
    	return $this->belongsTo('app\blog');
    }
    public function tag()
    {
    	return $this->belongsTo('app\tag');
    }
}
