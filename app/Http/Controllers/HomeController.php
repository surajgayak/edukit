<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Role;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Ui\Presets\React;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $alumnis = Alumni::get();
        $course = Course::get();
        return view('frontend.welcome', [
            'courses' => $course,
            'alumnis' => $alumnis
        ]);
    }


    public function userIndex(Request $request)
    {
        $main_query = User::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $users = $main_query->paginate($request->perPage);
        } else
            $users = $main_query->paginate(10);
        return view('user-index', ["users" => $users]);
    }

    public function userCreate()
    {
        $roles = Role::get();
        return view('user-create', ["roles" => $roles]);
    }


    public function userStore(Request $request)
    {
        $data = $request->validate([
            "name" => ['required', 'string', 'max:255'],
            "role_id" => ["required", "numeric"],
            "email" => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "password" => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        User::create($data);


        return redirect('/user-index');
    }

    public function userEdit(User $user)
    {
        $roles = Role::get();
        return view('user-edit', ["roles" => $roles, "user" => $user]);
    }

    public function userUpdate(Request $request, User $user)
    {
        if ($request->password) {
            $data = $request->validate([
                "name" => ['required', 'string', 'max:255'],
                "role_id" => ["required", "numeric"],
                "email" => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                "password" => ['required', 'string', 'min:8', 'confirmed'],

            ]);
        } else {
            $data = $request->validate([
                "name" => ['required', 'string', 'max:255'],
                "role_id" => ["required", "numeric"],
                "email" => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],

            ]);
        }

        $user->update($data);
        return  redirect('/user-index');
    }
}
