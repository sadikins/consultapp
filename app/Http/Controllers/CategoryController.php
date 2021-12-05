<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {

        $page = Page::where('title', 'blog')->first();

        $data = array(
            'category' => $category,
            'title' => $category->name,
            'posts' => $category->posts()->with('category', 'authorId')->paginate(3),
            'page' => $page,
            'meta_description' => $page->meta_description,
            'meta_keywords' => $page->meta_keywords,


        );

        return view('blog.index')->with($data);
    }
}
