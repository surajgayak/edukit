<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Category::query();
        if ($request->keyword) {
            $main_query->where("name", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage>0) {
            $categories = $main_query->paginate($request->perPage);
        }
        else
            $categories = $main_query->paginate(10);
        return view("category-index" , [
            "categories" => $categories
        ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category-create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            "name" => ["required", "string"],


        ]);
        Category::create($data);
        return redirect('/category-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("category-edit",["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            "name" => ["required", "string"],

        ]);
        $category->update($data);
        return redirect('/category-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
