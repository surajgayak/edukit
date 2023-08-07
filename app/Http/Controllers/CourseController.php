<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function courseIndex()
    {
        $course = Course::get();

        return view('course-index', [
            'courses' => $course
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function courseCreate()
    {
        return view('course-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function courseStore(Request $request)
    {

        $data = $request->validate([
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "benefit" => ["required", "string"],
            "introduction" => ["required", "string"],
            "duration" => ["required", "string"],
            "image" => ["required"]

        ]);
        $image = $request->file('image');
        $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/photos');
        $image->move($destinationPath, $input['image_name']);
        $data['image'] = $input['image_name'];

        Course::create($data);
        return redirect('/course-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function courseEdit(Course $course)
    {
        return view('course-edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/course-index');
    }
}
