<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer_skill extends Model
{
    public function developer()
    {
    	return $this->belongsTo('app\developer');
    }
}
