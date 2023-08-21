<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Type;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Media::query();

        if ($request->perPage > 0) {
            $medias = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $medias = $main_query->orderBy('id', 'desc')->paginate(10);
        return view("media-index", ["medias" => $medias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::get();
        return view("media-create", [
            "types" => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "filename" => ["required"],
            "type_id" => ["required"]

        ]);
        $image = $request->file('filename');
        $input['image_name'] = "media-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/medias');
        $image->move($destinationPath, $input['image_name']);
        $data['filename'] = $input['image_name'];

        Media::create($data);

        return redirect('/media-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        return view("media-edit", ["media" => $media]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        $media->delete();
        return redirect('/media-index');
    }

    public function mediaIndex()
    {
        $media = Media::get();
        return view('frontend.welcome', [
            'medias' => $media,
        ]);
    }
}
