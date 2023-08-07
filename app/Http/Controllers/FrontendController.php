<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notice;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
    public function classes()
    {
        return view('frontend.upcommingclass');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function coursecontent()
    {
        return view('frontend.coursecontent');
    }
    public function allcourse()
    {
        return view('frontend.allcourse');
    }
    public function sendenquiry()
    {
        return view('frontend.sendenquiry');
    }
    public function getadmission()
    {
        return view('frontend.payment');
    }
    public function placementpartner()
    {
        return view('frontend.placementpartner');
    }
    public function successstories()
    {
        return view('frontend.successstories');
    }
}
