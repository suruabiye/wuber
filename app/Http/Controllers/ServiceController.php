<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services.index');
    }
    public function vehicle()
    {
        return view('pages.services.vehicle');
    }
}
