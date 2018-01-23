<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    public function developer_education()
    {
    	return $this->hasMany('app\developer_education');
    }
    public function developer_experience()
    {
    	return $this->hasMany('app\developer_experience');
    }
    public function developer_skill()
    {
    	return $this->hasMany('app\developer_skill');
    }
    
}
