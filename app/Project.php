<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = ['name','governate','city','img'];
    
    public function compound()
    {
        return $this->hasMany('App\Compound');
    }
}
