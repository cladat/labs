<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_Tag extends Model
{
    public function article() {
        return $this->belongsTo('App\Article', 'article_id', 'id');
    }
    public function tag() {
        return $this->belongsTo('App\Tag', 'tag_id', 'id');
    }
}
