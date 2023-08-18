{{-- @extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- liness -->
    <div class="flex justify-between items-center mx-auto my-8 w-2/5">
        <div class="circles1 w-7  rounded-full bg-green-600 text-center text-white font-thin">1</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles2 w-7  rounded-full bg-gray-400  text-center text-white font-thin"
            style="background-color:rgb(2, 163, 2);">
            2
        </div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles3 w-7  rounded-full bg-gray-400 text-center  text-white font-thin"
            style="background-color:rgb(2, 163, 2);">3
        </div>
    </div>
    <!-- Review Descriptions -->
    <div class="flex flex-wrap justify-start w-1/3 mt-10  m-auto mb-5 pl-3 shadow-lg pb-2  h-auto">
        <div class="details ">
            <h1 class="text-2xl font-bold ">Details</h1>
            <table class="table border border-3" style="width: 110%">
                <tbody>
                    <tr>
                        <td class="border border-3 px-3 ">Name</td>
                        <td class="border border-3 px-3  ">{{ ucfirst($admissions->name) }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">Email</td>
                        <td class="border border-3  px-3">{{ $admissions->email }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">Contact</td>
                        <td class="border border-3  px-3">{{ $admissions->phone_number }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">Address</td>
                        <td class="border border-3  px-3">{{ ucfirst($admissions->address) }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">Course</td>
                        <td class="border border-3 px-3 ">{{ ucfirst($admissions->upcommingclasses->courses->title) }}</td>
                    </tr>

                    <tr>
                        <td class=" border border-3 px-3">Academic Level</td>
                        <td class="border border-3  px-3">{{ ucfirst($admissions->academic_level) }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">School/College</td>
                        <td class="border border-3  px-3">{{ ucfirst($admissions->college) }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">Payment Way</td>
                        <td class="border border-3  px-3">{{ ucfirst($admissions->paymentmethods->title) }}</td>
                    </tr>
                    <tr>
                        <td class="  border border-3 px-3">Amount</td>
                        <td class="border border-3  px-3">Rs.{{ ucfirst($admissions->payment_amount) }}</td>
                    </tr>
                    <tr>
                        <td class=" border border-3 px-3">Payment Screeenshot</td>
                        <td class="border border-3  px-3"><img
                                src="{{ asset('images/medias/' . $admissions->payment_image) }} " class="w-40 h-40"></td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-end mr-1 pt-2 ">
                <a href="{{ route('welcomepage') }}">
                    <button class="p-2 bg-green-600 text-white rounded w-32">Done</button>
                </a>
            </div>
        </div>
    </div>
@endsection --}}


{{--  --}}
@extends('layouts.frontend-layout.navfoot')

@section('content')
    <div class="flex justify-between items-center mx-auto my-8 w-2/5 ">
        <div class="circles1 w-7 rounded-full bg-green-600 text-center text-white font-thin">1</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles2 w-7 rounded-full bg-gray-400 text-center text-white font-thin"
            style="background-color: rgb(2, 163, 2);">2</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles3 w-7 rounded-full bg-gray-400 text-center text-white font-thin"
            style="background-color: rgb(2, 163, 2);">3</div>
    </div>

    <div class="flex flex-wrap justify-center w-full mt-10 m-auto mb-5 pl-3 shadow-lg pb-2 h-auto">
        <div class="w-2/5">
            <div class="details">
                <h1 class="text-2xl font-bold pl-3">Details</h1>
                <table class="table border border-3" style="width: 100%">
                    <tbody>
                        <tr>
                            <td class="border border-3 font-bold  px-3">Name</td>
                            <td class="border border-3 px-3">{{ ucfirst($admissions->name) }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3 font-bold  px-3">Email</td>
                            <td class="border border-3  px-3">{{ $admissions->email }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3 font-bold  px-3">Contact</td>
                            <td class="border border-3  px-3">{{ $admissions->phone_number }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3 font-bold  px-3">Address</td>
                            <td class="border border-3  px-3">{{ ucfirst($admissions->address) }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3  font-bold px-3">Course</td>
                            <td class="border border-3 px-3 ">{{ ucfirst($admissions->upcommingclasses->courses->title) }}
                            </td>
                        </tr>

                        <tr>
                            <td class=" border border-3  font-bold px-3">Academic Level</td>
                            <td class="border border-3  px-3">{{ ucfirst($admissions->academic_level) }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3  font-bold px-3">School/College</td>
                            <td class="border border-3  px-3">{{ ucfirst($admissions->college) }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3  font-bold px-3">Payment Way</td>
                            <td class="border border-3  px-3">{{ ucfirst($admissions->paymentmethods->title) }}</td>
                        </tr>
                        <tr>
                            <td class="  border border-3 font-bold  px-3">Amount</td>
                            <td class="border border-3  px-3">Rs.{{ ucfirst($admissions->payment_amount) }}</td>
                        </tr>
                        <tr>
                            <td class=" border border-3 font-bold  px-3">Payment Screeenshot</td>
                            <td class="border border-3  px-3"><img
                                    src="{{ asset('images/medias/' . $admissions->payment_image) }} " class="w-40 h-40">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-end mr-1 pt-2">
                    <a href="{{ route('welcomepage') }}">
                        <button class="p-2 bg-green-600 text-white rounded w-32">Done</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- ... Add content for the second half of the layout if needed ... -->
    </div>
@endsection
