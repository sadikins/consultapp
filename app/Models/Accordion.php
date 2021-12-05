<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accordion extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'status'];



    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
