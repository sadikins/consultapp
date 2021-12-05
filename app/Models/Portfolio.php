<?php

namespace App\Models;


use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'slug', 'body', 'image', 'status'];


    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
