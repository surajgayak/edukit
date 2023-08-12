<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notice;
use App\Models\Alumni;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function aboutus()
    {
        $aboutIntro = Notice::whereHas('categories', function ($query) {
            $query->where('name', "about intro");
        })->get();
        $aboutCard = Notice::whereHas('categories', function ($query) {
            $query->where('name', "about card");
        })->get();

        return view('frontend.aboutus', [
            "aboutIntro" => $aboutIntro,
            "aboutCard" => $aboutCard,
        ]);
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
        $alumnis = Alumni::get();
        return view('frontend.successstories', [
            'alumnis' => $alumnis,
        ]);
    }
}
