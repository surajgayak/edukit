@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- cadmission contains  -->
    <div class="course-details  mt-1 p-10 text-white">
        <!-- Breadcrumbs -->
        <div class="text-sm text-white">
            <a href="#" class="hover:text-gray-700">Home</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-gray-700">Admission</a>

        </div>

        <!-- Title of Product -->
        <h1 class="text-4xl font-semibold my-4 text-center">Online Student Admission Form</h1>

        <!-- Description -->
        <p class="text-white text-center">For our candidates to admit for their interested IT Course at their comfort,
            we have made
            available the Online Admission Form below!</p>


        <div class="flex justify-center">
            <!-- Enquiry button -->
            {{-- <button class="mt-10 bg-yellow-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded">VIEW FORM<i
                    class="fas fa-arrow-right pl-2"></i></button> --}}

            <!-- Get Admission button -->
            <button class="mt-10 mx-5 bg-cyan-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded"
                style="background-color: #f96b1c">OUR
                PAYMENT
                OPTIONS<i class="fas fa-arrow-down pl-2"></i></button>
        </div>
    </div>

    <!-- onlineadmission -->
    <div class="m-10">
        <p class="text-center text-xl font-bold">Online Admission
        </p>
        <br>

    </div>
    <!-- forms lines -->
    <div class="flex justify-between items-center mx-auto my-8 w-2/5 threedots">
        <div class="circles1 w-7  rounded-full  text-center text-white font-thin"style="background-color: #f96b1c">1</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles2 w-7  rounded-full   text-center text-white font-thin bg-green-600"
            style="background-color: #f96b1c">
            2
        </div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles3 w-7  rounded-full bg-gray-400 text-center  text-white font-thin">3</div>
    </div>

    <div class="flex justify-between items-center mx-auto my-1 threeinfo" style="width:50%">
        <div class="circles1  rounded-full  text-center  font-thin ">Personal Information</div>
        <div class="circles2   rounded-full   text-center  font-thin">Payment Information</div>
        <div class="circles3  rounded-full  text-center   font-thin">Review Details</div>
    </div>

    <!-- select payment option -->
    <div class=" m-auto mt-20 md:w-1/2 p-2 ">
        <h1 class="text-lg my-5">Select Payment Option</h1>
        <div id="accordion-collapse" data-accordion="collapse">
            <div class="flex flex-wrap justify-start gap-5 ">
                @foreach ($paymentmethods as $paymentmethod)
                    <div class="esewa cursor-pointer image-container border ">
                        <span data-accordion-target="#accordion-collapse-body-{{ $paymentmethod->id }}" aria-expanded="true"
                            aria-controls="accordion-collapse-body-{{ $paymentmethod->id }}">
                            <img src="{{ asset('images/medias/' . $paymentmethod->logo) }}" class="w-32 h-20">
                        </span>
                    </div>
                @endforeach
            </div>
            {{-- accordian start --}}

            @foreach ($paymentmethods as $paymentmethod)
                <div id="accordion-collapse-body-{{ $paymentmethod->id }}" class="hidden text-white"
                    aria-labelledby="accordion-collapse-heading-{{ $paymentmethod->id }}">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <h2 class="text-center pb-3"> {{ $paymentmethod->title }}</h2>
                        <img src="{{ asset('images/medias/' . $paymentmethod->image) }}" class="w-56 h-56 m-auto">
                    </div>

                </div>
            @endforeach

            {{-- accordia end --}}
            <form method="POST" action="{{ route('payment-update', $getadmission) }}" enctype="multipart/form-data">
                @csrf
                <p class="pt-5">Payment method</p>
                <select class="border w-full outline-none mt-3 p-4  rounded" name="paymentmethod_id" required
                    aria-label="Default select example">
                    @foreach ($paymentmethods as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>

                <p class="pt-5">Payment amount</p>
                <input type="number" name="payment_amount" placeholder="Payment amount"
                    class="border w-full outline-none mt-3 p-4 bg-gray-100 rounded">

                <p class="pt-5">Payment Screenshot</p>
                <input type="file" name="payment_image" placeholder="Your Payment Screenshot"
                    class="border w-full outline-none mt-3 bg-gray-100 p-4  rounded">



                <br>

                <div class="flex items-center justify-center mt-10">
                    {{-- <a href="">
                            <button class="bg-blue-700 px-3 py-2 text-white rounded prev w-32"><i class="fas fa-arrow-left"></i>
                                Previous</button>
                        </a> --}}

                    <button type="submit" class=" px-3 py-2 text-white rounded ml-4 w-32"
                        style="background-color: #f96b1c"> Submit <i class="fas fa-arrow-right">
                        </i></button>

            </form>

        </div>

    </div>
    </div>
@endsection
