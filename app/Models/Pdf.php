<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    public function proyect()
    {
        return $this->belongsTo('App\Models\Proyect');
    }
    public function production()
    {
        return $this->belongsTo('App\Models\Production');
    }
}
