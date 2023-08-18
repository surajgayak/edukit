<?php

namespace App\Http\Controllers;

use App\Models\Getadmission;
use App\Models\Paymentmethod;
use Illuminate\Http\Request;

class PaymentmethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $main_query = Paymentmethod::query();
        if ($request->keyword) {
            $main_query->where("title", "LIKE", "%" . $request->keyword . "%");
        }
        if ($request->perPage > 0) {
            $paymentmethod = $main_query->paginate($request->perPage);
        } else
            $paymentmethod = $main_query->paginate(10);
        return view("paymentmethod-index", ["payments" => $paymentmethod]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paymentmethod-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->logo) {
            $data = $request->validate([
                "title" => ["required"],
                "logo" => ["required"],
                "image" => ["nullable"]

            ]);
            $image = $request->file('logo');

            $input['image_name'] = "logo-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();
            $destinationPath = public_path('/images/medias');
            $image->move($destinationPath, $input['image_name']);
            $data['logo'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "title" => ["required"],
                "image" => ["nullable"]
            ]);
        }

        $image2 = $request->file('image');
        $input2['image_name'] = "qr-" . date('Ymdhis') . random_int(0, 1234) . "." . $image2->getClientOriginalName();
        $image2->move($destinationPath, $input2['image_name']);
        $data['image'] = $input2['image_name'];

        Paymentmethod::create($data);
        return redirect('paymentmethod-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paymentmethod $paymentmethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paymentmethod $paymentmethod)
    {
        return view('paymentmethod-edit', [
            'paymentmethod' => $paymentmethod
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paymentmethod $paymentmethod)
    {
        if ($request->image) {
            $data = $request->validate([
                "title" => ["required"],
                "logo" => ["required"],
                "image" => ["nullable"]

            ]);
            $image = $request->file('logo');
            $image2 = $request->file('image');
            $input['image_name'] = "logo-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();
            $input2['image_name'] = "logo-" . date('Ymdhis') . random_int(0, 1234) . "." . $image2->getClientOriginalName();

            $destinationPath = public_path('/images/medias');
            $image->move($destinationPath, $input['image_name']);
            $image2->move($destinationPath, $input2['image_name']);

            $data['logo'] = $input['image_name'];
            $data['image'] = $input2['image_name'];
        } else {
            $data = $request->validate([
                "title" => ["required"],
                "logo" => ["required"],
                "image" => ["nullable"]

            ]);
        }

        $paymentmethod->update($data);
        return redirect('paymentmethod-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paymentmethod $paymentmethod)
    {
        $paymentmethod->delete();
        return redirect('paymentmethod-index');
    }
}
