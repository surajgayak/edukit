<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Setting::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $setting = $main_query->paginate($request->perPage);
        } else
            $setting = $main_query->paginate(10);


        return view('setting-index', [
            'settings' => $setting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "location" => ["required", "string"],
            "mobile_number" => ["required", "string"],
            "landline_number" => ["required", "string"],
            "whatsapp_number" => ["required", "string"],
            "viber_number" => ["required", "string"],
            "facebook_link" => ["required"],
            "instagram_link" => ["required"],
            "twitter_link" => ["required"],
            "linkden_link" => ["required"],
            "establish_date" => ["required"],
            "numberof_student" => ["required", "string"]

        ]);


        Setting::create($data);
        return redirect('/setting-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('setting-edit', [
            'settings' => $setting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "location" => ["required", "string"],
            "mobile_number" => ["required", "string"],
            "landline_number" => ["required", "string"],
            "whatsapp_number" => ["required", "string"],
            "viber_number" => ["required", "string"],
            "facebook_link" => ["required"],
            "instagram_link" => ["required"],
            "twitter_link" => ["required"],
            "linkden_link" => ["required"],
            "establish_date" => ["required"],
            "numberof_student" => ["required", "string"]

        ]);


        $setting->update($data);
        return redirect('/setting-index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect('/setting-index');
    }
    // public function settingindex()
    // {
    //     $settings = Setting::get();
    //     return view('frontend.aboutus', [
    //         "settings" => $settings
    //     ]);
    // }
}
