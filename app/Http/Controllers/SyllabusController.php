<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Syllabus;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Syllabus::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $syllabuses = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $syllabuses = $main_query->orderBy('id', 'desc')->paginate(10);


        return view('syllabus-index', [
            'syllabuses' => $syllabuses

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::get();
        return view('syllabus-create', [
            'courses' => $courses

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "course_id" => ["required", "string"],
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
                "course_id" => ["required", "string"]

            ]);
        }

        Syllabus::create($data);

        return redirect('/syllabus-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Syllabus $syllabus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Syllabus $syllabus)
    {
        $courses = Course::get();
        return view("syllabus-edit", [
            "syllabus" => $syllabus,
            "courses" => $courses

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Syllabus $syllabus)
    {
        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "course_id" => ["required", "string"],
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
                "course_id" => ["required", "string"],
                "image" => ["required"]

            ]);
        }

        $syllabus->update($data);
        return redirect('/syllabus-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syllabus $syllabus)
    {
        $syllabus->delete();
        return redirect('/syllabus-index');
    }

    public function add(Course $course)
    {
        return view('syllabus-add', [
            'course' => $course

        ]);
    }
}