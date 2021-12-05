<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillabel = ['title', 'slug', 'body', 'image', 'status'];

    public function accordions()
    {
        return $this->belongsToMany(Accordion::class);
    }

    public function fancyboxes()
    {
        return $this->belongsToMany(Fancybox::class);
    }


    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }

    public function authorId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id');
    }
}
