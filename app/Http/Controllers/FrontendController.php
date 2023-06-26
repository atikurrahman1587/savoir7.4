<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function index(): View
    {
        return view('frontend.home.index');
    }

    public function about_us(): View
    {
        return view('frontend.pages.about-us');
    }

    public function crowdMall(): View
    {
        return view('frontend.pages.crowdmall');
    }
}
