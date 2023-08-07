<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Role::query();
        if ($request->keyword) {
            $main_query->where("name", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage>0) {
            $roles = $main_query->paginate($request->perPage);
        }
        else
            $roles = $main_query->paginate(10);
        return view("role-index",["roles"=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("role-create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],


        ]);
        Role::create($data);
        return redirect('/role-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view("role-edit", ["role"=>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            "name" => ["required", "string"],


        ]);
        $role->update($data);
        return redirect('/role-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
