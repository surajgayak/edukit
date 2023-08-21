<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Alumni::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $alumnis = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $alumnis = $main_query->orderBy('id', 'desc')->paginate(10);


        return view('alumni-index', [
            'alumnis' => $alumnis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumni-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["nullable"],
                "placement" => ["nullable"],
                "description" => ["nullable"],
                "image" => ["required"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();
            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["nullable"],
                "placement" => ["nullable"],
                "description" => ["nullable"],

            ]);
        }
        Alumni::create($data);
        return redirect('/alumni-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumni $alumni)
    {
        return view('alumni-edit', [
            'alumnis' => $alumni,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumni $alumni)
    {
        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["nullable"],
                "placement" => ["nullable"],
                "description" => ["nullable"],
                "image" => ["required"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["nullable"],
                "placement" => ["nullable"],
                "description" => ["nullable"],

            ]);
        }

        $alumni->update($data);
        return redirect('/alumni-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        $alumni->delete();
        return redirect('/alumni-index');
    }
}
