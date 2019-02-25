<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function projects() {
	    return $this->hasMany('App\Project', 'icon_id', 'id');
    }

    public function services() {
	    return $this->hasMany('App\Service', 'icon_id', 'id');
    }
}
