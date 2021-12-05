<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Company;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use illuminate\Support\Collection;


class PageController extends Controller
{
    // Home Page
    public function homepage()
    {




        $page = Page::where('title', 'Homepage')->first();
        // $company = Company::where('title', 'about')->get();


        $data = [
            'page' => $page,
            'title' => $page->title,
            'meta_description' => $page->meta_description,
            'latest_post' => Post::latest()->limit(6)->get(),
            'testimonials' => Testimonial::latest()->limit(3)->get(),
            'company' => Company::where('status', 'active')->first(),
            'sliders' => Slider::where('category_id', 3)
                ->where('status', 'ACTIVE')
                ->latest()->limit(10)->get(),
            'services' => Service::where('status', 'publish')->where('featured', '1')->orderBy('id', 'desc')->get(),
            'clients' => Client::latest()->where('featured', '1')->limit(10)->get(),
            'portfolios' => Portfolio::where('status', 'ACTIVE')->where('featured', '1')->latest()->limit(12)->get(),
            'filter' => collect(Portfolio::where('status', 'ACTIVE')->get())->unique('category_id'),

        ];

        return view('homepage.index')->with($data);
    }

    // Portfolio
    public function portfolio()
    {
        $page = Page::where('title', 'portfolio')->first();


        $data = [
            'page' => $page,
            'title' => 'Projects',
            'meta_description' => $page->meta_description,
            'portfolios' => Portfolio::where('status', 'ACTIVE')->latest()->get(),
            'filter' => collect(Portfolio::where('status', 'ACTIVE')->get())->unique('category_id'),
            'clients' => Client::latest()->where('featured', '1')->limit(10)->get(),

        ];


        return view('portfolio.index')->with($data);
    }

    // Contact Page
    public function contact()
    {

        $page = Page::where('title', 'Contact')->first();



        $data = [
            'page' => $page,
            'title' => $page->title,
            'meta_description' => $page->meta_description,
            'clients' => Client::latest()->where('featured', '1')->limit(10)->get(),

        ];

        return view('contact.index')->with($data);
    }


    public function service()
    {
        $page = Page::where('title', 'Services')->first();
        $data = [
            'page' => $page,
            'title' => $page->title,
            'meta_description' => $page->meta_description,
            'keywords_description' => $page->keywords_description,
            'services' => Service::where('status', 'publish')->orderBy('id', 'Desc')->get(),
            'testimonials' => Testimonial::latest()->limit(3)->get(),
            'clients' => Client::latest()->where('featured', '1')->limit(10)->get(),
        ];
        return view('service.index')->with($data);
    }
}
