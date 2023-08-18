<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notice;
use App\Models\Alumni;
use App\Models\Media;
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




    public function allcourse()
    {
        return view('frontend.allcourse');
    }
    public function paymentinfo()
    {
        return view('frontend.allcourse');
    }


    public function placementpartner()
    {
        $placements = Media::whereHas('type', function ($query) {
            $query->where('name', "placement");
        })->get();
        return view(
            'frontend.placementpartner',
            [
                'placements' => $placements
            ]
        );
    }
    public function successstories()
    {
        $alumnis = Alumni::get();
        return view('frontend.successstories', [
            'alumnis' => $alumnis,
        ]);
    }
}
