<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::get();
        $main_query = Notice::query();
        if ($request->category > 0) {
            $main_query->where("category_id", $request->category);
        }
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $notices = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $notices = $main_query->orderBy('id', 'desc')->paginate(10);
        return view("notice-index", [
            "notices" => $notices,
            "categories" => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view("notice-create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "status" => ["required", "boolean"],
                "priority" => ["nullable", "int"],
                "category_id" => ["required", "int"],
                "description" => ["required", "string"],
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
                "status" => ["required", "boolean"],
                "priority" => ["nullable", "int"],
                "category_id" => ["required", "int"],
                "description" => ["required", "string"],

            ]);
        }



        Notice::create($data);
        return redirect('/notice-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        $categories = Category::get();
        return view("notice-edit", [
            "categories" => $categories,
            "notice" => $notice
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notice $notice)
    {
        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "status" => ["required", "boolean"],
                "priority" => ["nullable", "int"],
                "category_id" => ["required", "int"],
                "description" => ["required", "string"],
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
                "status" => ["required", "boolean"],
                "priority" => ["nullable", "int"],
                "category_id" => ["required", "int"],
                "description" => ["required", "string"],

            ]);
        }


        $notice->update($data);
        return redirect('/notice-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();
        return redirect('/notice-index');
    }
    public function blog()
    {
        $blogs = Notice::whereHas('categories', function ($query) {
            $query->where('name', "blog");
        })->get();

        return view("frontend.blog", [
            "blogs" => $blogs
        ]);
    }

    public function blogdesc(Notice $notice)
    {

        return view('frontend.blogdescription', [
            "blog" => $notice
        ]);
    }
}
