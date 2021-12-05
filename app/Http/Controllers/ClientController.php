<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show(Client $client)
    {

        $company = Company::where('title', 'client')->first();

        $data = [
            'company' => $company,
            'title' => $company->title,
            'meta_description' => $company->meta_description,
            'keywords_description' => $company->keywords_description,
            'menu' => Company::where('status', 'active')->orderBy('id', 'asc')->get(),
            // 'about' => Service::where('status', 'publish')->get(),
            // 'testimonials' => Testimonial::latest()->limit(3)->get(),
            'clients' => Client::latest()->where('featured', '1')->limit(10)->get(),
        ];
        return view('company.show')->with($data);
    }
}
