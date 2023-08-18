<?php

namespace App\Http\Controllers;

use App\Models\Getadmission;
use App\Models\Paymentmethod;
use App\Models\Upcommingclass;
use Illuminate\Http\Request;

class GetadmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Getadmission::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $getadmission = $main_query->paginate($request->perPage);
        } else
            $getadmission = $main_query->paginate(10);


        return view('getadmission-index', [
            'getadmissions' => $getadmission
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "phone_number" => ["required", "string"],
            "address" => ["required", "string"],
            "academic_level" => ["nullable"],
            "college" => ["nullable"],
            "upcommingclasses_id" => ["required"],

        ]);
        // dd($data);
        $getadmission = Getadmission::create($data);
        return redirect(route('paymentmethod', $getadmission));
    }



    /**
     * Display the specified resource.
     */
    public function show(Getadmission $getadmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Getadmission $getadmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Getadmission $getadmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Getadmission $getadmission)
    {
        //
    }

    public function getadmission(Upcommingclass $upcomming)
    {
        return view('frontend.getadmission', [
            'upcomming' => $upcomming
        ]);
    }
    public function welcpage()
    {
        return view('frontend.welcome');
    }

    public function paymentmethod(Getadmission $getadmission)
    {
        $paymentmethod = Paymentmethod::all();
        return view('frontend.paymentmethod', [
            'paymentmethods' => $paymentmethod,
            'getadmission' => $getadmission,
        ]);
    }
    public function paymentUpdate(Request $request, Getadmission $getadmission)
    {
        $data = $request->validate([
            "payment_image" => ["required"],
            "payment_amount" => ["required"],
            "paymentmethod_id" => ["required"],

        ]);

        $image = $request->file('payment_image');
        $input['image_name'] = "Payment-screenshot-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/medias');
        $image->move($destinationPath, $input['image_name']);
        $data['payment_image'] = $input['image_name'];
        $data['status'] = "pending";
        // dd($data);
        $getadmission->update($data);
        return redirect(route('reviewdetails', $getadmission));
    }
    public function review(Getadmission $getadmission)
    {
        return view('frontend.reviewdetails', [
            'admissions' => $getadmission
        ]);
    }
}
