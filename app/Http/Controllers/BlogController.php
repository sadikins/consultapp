<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $page = Page::where('title', 'blog')->first();

        $data = [
            'page' => $page,
            'title' => 'News & Media',
            'meta_description' => $page->meta_description,
            'meta_keywords' => $page->meta_keywords,
            'posts' => Post::where('status', 'published')->with('category', 'authorId')->latest()->paginate(6),

        ];

        return view('blog.index')->with($data);
    }


    public function show(Post $post)
    {
        $next_post = Post::where('id', '>', $post->id)->min('id');
        $prev_post = Post::where('id', '<', $post->id)->max('id');

        $data = [
            'post' => $post,
            'title' => $post->title,
            'meta_description' => $post->meta_description,
            'latest_post' => Post::where('id', '!=', $post->id)->latest()->limit(3)->get(),
            'next' => Post::find($next_post),
            'prev' => Post::find($prev_post),
            'tags' => Tag::limit(8)->get(),

        ];

        return view('blog.show')->with($data);
    }
}
