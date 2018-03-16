<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compound extends Model
{
    public $fillable = ['name','location','img','project_id'];
    
    public function project()
    {
        return $this->belongsTo('App\Project','project_id');
    }
    public function building()
    {
        return $this->hasMany('App\Building');
    }

}
