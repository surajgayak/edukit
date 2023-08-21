<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Download::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%")
                ->orWhere("detail", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $downloads = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $downloads = $main_query->orderBy('id', 'desc')->paginate(10);
        return view("downloads-index", ["downloads" => $downloads]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("downloads-create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ["required", "string"],
            "type" => ["required", "string"],
            "category" => ["required", "string"],
            "file" => ["required"],
            "detail" => ["required", "string"],


        ]);
        $image = $request->file('file');
        $input['image_name'] = "download-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/downloads');
        $image->move($destinationPath, $input['image_name']);
        $data['file'] = $input['image_name'];

        Download::create($data);

        return redirect('/download-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Download $download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Download $download)
    {
        return view("downloads-edit", ["download" => $download]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Download $download)
    {
        if ($request->file) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "type" => ["required", "string"],
                "category" => ["required", "string"],
                "file" => ["required"],
                "detail" => ["required", "string"],


            ]);
            $image = $request->file('file');
            $input['image_name'] = "download-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/downloads');
            $image->move($destinationPath, $input['image_name']);
            $data['file'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "title" => ["required", "string"],
                "type" => ["required", "string"],
                "category" => ["required", "string"],
                "detail" => ["required", "string"],

            ]);
        }

        $download->update($data);

        return redirect('/download-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        //
    }
}
