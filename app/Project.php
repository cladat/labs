<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function icon(){
	    return $this->belongsTo('App\Icon', 'icon_id', 'id');
    }
}
