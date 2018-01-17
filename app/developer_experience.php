<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer_experience extends Model
{
    public function developer_experience()
    {
    	return $this->belongsTo('app\developer');
    }
}
