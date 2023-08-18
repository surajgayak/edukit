<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Type::query();
        if ($request->keyword) {
            $main_query->where("name", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $types = $main_query->paginate($request->perPage);
        } else
            $types = $main_query->paginate(10);
        return view("type-index", [
            "types" => $types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("type-create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],


        ]);
        Type::create($data);
        return redirect('/type-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view("type-edit", ["type" => $type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->validate([
            "name" => ["required", "string"],

        ]);
        $type->update($data);
        return redirect('/type-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}
