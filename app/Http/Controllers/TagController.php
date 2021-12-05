<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class TagController extends Controller
{
    public function show(Tag $tag)
    {

        $page = Page::where('title', 'blog')->first();

        $data = [

            'tag' => $tag,
            'title' => $tag->name,
            'posts' => $tag->posts()->with('category', 'authorId')->paginate(3),
            'page' => $page,
            'meta_description' => $page->meta_description,
            'meta_keywords' => $page->meta_keywords,

        ];

        return view('blog.index')->with($data);
    }
}
