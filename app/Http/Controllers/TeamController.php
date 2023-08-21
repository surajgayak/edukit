<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Setting;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Team::query();
        if ($request->keyword) {
            $main_query->where("name", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $teams = $main_query->orderBy('id', 'desc')->paginate($request->perPage);
        } else
            $teams = $main_query->orderBy('id', 'desc')->paginate(10);

        return view("team-index", [
            "teams" => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("team-create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            "name" => ["required", "string"],
            "position" => ["required", "string"],
            "category" => ["nullable"],
            "sorting" => ["nullable", "integer"],
            "status" => ["nullable"],
            "detail" => ["nullable", "string"],
            "facebook_link" => ["nullable"],
            "twitter_link" => ["nullable"],
            "linkedin_link" => ["nullable"],
            "photo" => ["required"]

        ]);
        $image = $request->file('photo');
        $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/photos');
        $image->move($destinationPath, $input['image_name']);
        $data['photo'] = $input['image_name'];

        Team::create($data);
        return redirect('/team-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view("team-edit", ["team" => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        if ($request->photo) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "position" => ["required", "string"],
                "category" => ["nullable"],
                "sorting" => ["nullable", "integer"],
                "status" => ["nullable"],
                "detail" => ["nullable", "string"],
                "facebook_link" => ["nullable"],
                "twitter_link" => ["nullable"],
                "linkedin_link" => ["nullable"],
                "photo" => ["required"]

            ]);
            $image = $request->file('photo');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['photo'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "position" => ["required", "string"],
                "category" => ["nullable"],
                "sorting" => ["nullable", "integer"],
                "status" => ["nullable"],
                "detail" => ["nullable", "string"],
                "facebook_link" => ["nullable"],
                "twitter_link" => ["nullable"],
                "linkedin_link" => ["nullable"],

            ]);
        }

        $team->update($data);
        return redirect('/team-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
    public function aboutus()
    {
        $aboutIntro = Notice::whereHas('categories', function ($query) {
            $query->where('name', "about intro");
        })->get();
        $aboutCard = Notice::whereHas('categories', function ($query) {
            $query->where('name', "about card");
        })->get();

        $settings = Setting::get();
        $teams = Team::get();
        return view('frontend.aboutus', [
            "aboutIntro" => $aboutIntro,
            "aboutCard" => $aboutCard,
            "teams" => $teams,
            "settings" => $settings
        ]);
    }
}
