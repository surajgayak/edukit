<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function courseIndex(Request $request)
    {
        $main_query = Course::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $course = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $course = $main_query->orderBy('id', 'desc')->paginate(10);


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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function courseEdit(Course $course)
    {

        return view("course-edit", [
            "course" => $course,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function courseUpdate(Request $request, Course $course)
    {
        if ($request->image) {
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
        } else {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "benefit" => ["required", "string"],
                "introduction" => ["required", "string"],
                "duration" => ["required", "string"],

            ]);
        }

        $course->update($data);
        return redirect('/course-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/course-index');
    }

    public function showdata()
    {
        $course = Course::get();
        return view('frontend.allcourse', [
            'courses' => $course
        ]);
    }
    public function coursecontent(Course $course)
    {
        $relatedcourses = Course::get();
        return view('frontend.coursecontent', [
            'courses' => $course,
            'relatedcourses' => $relatedcourses
        ]);
    }

    // public function index()
    // {
    //     view()->composer(
    //         'layouts.frontend-layout.navfoot',
    //         function ($view) {
    //             $view->with('courses', Course::get());
    //         }
    //     );
    // }
}
