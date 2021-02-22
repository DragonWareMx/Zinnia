<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->belongsToMany('App\Models\Profile');
    }
    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }
    public function video()
    {
        return $this->hasMany('App\Models\Video');
    }
}
