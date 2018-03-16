<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
        public $fillable = ['user_id','unit_id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function unit()
    {
        return $this->belongsTo('App\Unit','unit_id');
    }
}
