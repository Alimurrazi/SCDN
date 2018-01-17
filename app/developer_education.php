<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer_education extends Model
{
    public function developer_education()
    {
    	return $this->belongsTo('app\developer');
    }
}
