<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function testimonials() {
        return $this->hasMany('App\Testimonial', 'client_id', 'id');
    }
}
