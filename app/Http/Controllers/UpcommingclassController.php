<?php

namespace App\Http\Controllers;

use App\Models\Upcommingclass;
use App\Models\Course;
use Illuminate\Http\Request;

class UpcommingclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Upcommingclass::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $upcomming = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $upcomming = $main_query->orderBy('id', 'desc')->paginate(10);


        return view('upcommingclass-index', [
            'upcommings' => $upcomming,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::get();
        return view('upcommingclass-create', [
            'courses' => $course,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "start_date" => ["required", "date"],
            "start_time" => ["required"],
            "end_time" => ["required"],
            "course_id" => ["required"],

        ]);


        Upcommingclass::create($data);
        return redirect('/upcommingclass-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Upcommingclass $upcommingclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upcommingclass $upcommingclass)
    {
        $course = Course::get();
        return view("upcommingclass-edit", [
            "upcommingclasses" => $upcommingclass,
            "courses" => $course

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upcommingclass $upcommingclass)
    {
        $data = $request->validate([
            "start_date" => ["required", "date"],
            "start_time" => ["required"],
            "end_time" => ["required"],
            "course_id" => ["required"],

        ]);


        $upcommingclass->update($data);
        return redirect('/upcommingclass-index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upcommingclass $upcommingclass)
    {


        $upcommingclass->delete();
        return redirect('/upcommingclass-index');
    }

    public function classes()
    {

        $upcomming = Upcommingclass::get();
        return view('frontend.upcommingclass', [
            'upcommings' => $upcomming,
        ]);
    }
}
