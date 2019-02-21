<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profils';

    public function users()
    {
        return $this->belongsTo('App\User', 'profil_id', 'id');
    }
}
