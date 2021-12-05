<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use App\Models\Accordion;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function show(Service $service)
    {

        $data = [
            'page' => $service,
            'service' => $service,
            'title' => $service->title,
            'meta_description' => $service->meta_description,
            'menu' => Service::where('status', 'publish')->orderBy('id', 'desc')->get(),
            'clients' => Client::latest()->where('featured', '1')->limit(10)->get(),
            'portfolios' => Portfolio::where('status', 'ACTIVE')->limit(4)->latest()->get(),

        ];

        return view('service.show')->with($data);
    }
}
