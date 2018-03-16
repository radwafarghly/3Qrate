<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    
    protected $fillable = [
        'img_name', 'img_id', 'img_type'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

}
