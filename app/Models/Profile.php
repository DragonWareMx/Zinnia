<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsToMany('App\Models\Event');
    }
    public function production()
    {
        return $this->belongsToMany('App\Models\Production');
    }
    public function proyect()
    {
        return $this->belongsToMany('App\Models\Proyect');
    }
}

