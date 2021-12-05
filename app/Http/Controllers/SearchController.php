<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class SearchController extends Controller
{
    public function post()
    {
        $query = request('query');
        $page = Page::where('title', 'blog')->first();

        $data = [
            'page' => $page,
            'title' => $page->title,
            'meta_description' => $page->meta_description,
            'meta_keywords' => $page->meta_keywords,
            'posts' => Post::where("title", "like", "%$query%")->latest()->paginate(10),
            'quer' => $query,
        ];

        return view('blog.index')->with($data);
    }
}
