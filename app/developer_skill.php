<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer_skill extends Model
{
	protected $table =
        'developer_skill';

    public function developer()
    {
    	return $this->belongsTo('app\developer');
    }
}
