<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fancybox extends Model
{
    use HasFactory;


    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
