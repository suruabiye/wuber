<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('pages.about');
    }
    public function faq()
    {
        return view('faq');
    }

    public function packages()
    {
        return view('pages.packages');
    }
    public function becomeDriver()
    {
        $countries = Country::all();
        return view('pages.become-a-driver', [
            'countries' => $countries
        ]);
    }
}
