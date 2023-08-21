<?php

namespace App\Http\Controllers;

use App\Models\Sendenquiry;
use App\Models\Course;
use App\Models\Upcommingclass;
use Illuminate\Http\Request;

class SendenquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $upcommings = Upcommingclass::get();
        $course = Course::get();
        return view('frontend.sendenquiry', [
            'courses' => $course,
            'upcommings' => $upcommings

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sendenquiry = new Sendenquiry;
        $sendenquiry->name = $request->name;
        $sendenquiry->email = $request->email;
        $sendenquiry->contact = $request->contact;
        $sendenquiry->course = $request->course;
        $sendenquiry->college = $request->college;
        $sendenquiry->message = $request->message;
        $sendenquiry->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Sendenquiry $sendenquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sendenquiry $sendenquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sendenquiry $sendenquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sendenquiry $sendenquiry)
    {
        //
    }
    public function  sendenq(Request $request)
    {
        $main_query = Sendenquiry::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $sendenquiries = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $sendenquiries = $main_query->orderBy('id', 'desc')->paginate(10);

        // $sendenquiries = Sendenquiry::get();
        return view('sendenquiry-index', [
            'sendenquiries' => $sendenquiries
        ]);
    }

    public function sendcourseenquiry(Upcommingclass $upcomming)
    {

        return view('frontend.sendcourseenquiry', [
            'upcommingclass' => $upcomming
        ]);
    }
}
