<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
    protected $guarded=['id'];

    public function user(){
        return $this->belongsTo("App\User");
    }
    public function comments(){
        return $this->hasMany("App\Comment", "news_id");
    }
    public function category()
    {
        return $this->belongsTo("App\Category");
    }
}
