<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Course;
use App\Models\Media;
use App\Models\Notice;
use App\Models\Paymentmethod;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $staticImageUrls = [
            'https://broadwayinfosys.com/assets/images/svg-icons/ico-precious.svg',
            'https://broadwayinfosys.com/assets/images/svg-icons/ico-professional.svg',
            'https://broadwayinfosys.com/assets/images/svg-icons/ico-student-certificate.svg',
        ];
        $staticTextContents = [
            'Precious and Happy Clients',
            'Professional IT Training Institute in Nepal',
            'Student Certified and Job Placement',

        ];
        $cards = Media::whereHas('type', function ($query) {
            $query->where('name', "card");
        })->get();
        $homeIntro = Notice::whereHas('categories', function ($query) {
            $query->where('name', "home intro");
        })->get();
        $homeslider = Media::whereHas('type', function ($query) {
            $query->where('name', "slider");
        })->get();
        $placements = Media::whereHas('type', function ($query) {
            $query->where('name', "placement");
        })->get();
        $paymentmethod = Paymentmethod::all();
        // dd($medias);
        $alumnis = Alumni::get();
        $course = Course::get();
        return view('frontend.welcome', [
            'courses' => $course,
            'alumnis' => $alumnis,
            'cards' => $cards,
            'homeIntro' => $homeIntro,
            'staticTextContents' => $staticTextContents,
            'staticImageUrls' => $staticImageUrls,
            'homesliders' => $homeslider,
            'placements' => $placements,
            'paymentmethods' => $paymentmethod

        ]);
    }
}
