@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- cadmission contains  -->
    <div class="course-details  mt-1 p-10 text-white">
        <!-- Breadcrumbs -->
        <div class="text-sm text-white">
            <a href="#" class="hover:text-gray-700">Home</a>
            <span class="mx-2">/</span>
            <a href="" class="hover:text-gray-700">Admission</a>

        </div>

        <!-- Title of Product -->
        <h1 class="text-4xl font-semibold my-4 text-center">Online Student Admission Form</h1>

        <!-- Description -->
        <p class="text-white text-center">For our candidates to admit for their interested IT Course at their comfort,
            we have made
            available the Online Admission Form below!</p>


        <div class="flex justify-center">
            <!-- Enquiry button -->
            <button class="mt-10 bg-yellow-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded">VIEW FORM<i
                    class="fas fa-arrow-down pl-2"></i></button>

            <!-- Get Admission button -->

        </div>
    </div>

    <!-- onlineadmission -->
    <div class="m-10">
        <p class="text-center text-xl font-bold">Online Admission
        </p>
        <br>
        <p class="text-center">Please fill out the form below and get enrolled now! All Asterisks (*) fields are
            mandatory to fill-up.
        </p>
    </div>
    <!-- forms lines -->
    <div class="flex justify-between items-center mx-auto my-8 w-2/5">
        <div class="circles1 w-7  rounded-full bg-green-400 text-center text-white font-thin">1</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles2 w-7  rounded-full bg-gray-400  text-center text-white font-thin">2</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles3 w-7  rounded-full bg-gray-400 text-center  text-white font-thin">3</div>
    </div>

    <div class="flex justify-between items-center mx-auto my-1 " style="width:50%">
        <div class="circles1  rounded-full  text-center  font-thin ">Personal Information</div>
        <div class="circles2   rounded-full   text-center  font-thin">Payment Information</div>
        <div class="circles3  rounded-full  text-center   font-thin">Review Details</div>
    </div>

    <!-- enquiry form -->
    <div class="contain mx-auto px-4 py-10">
        <form action="/getadmission" method="post" id="responsive-form"
            class="md:w-1/2 mx-auto bg-white  rounded px-8 pt-6 pb-8 mb-4 "
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            @csrf
            <!-- <h1 class="text-center font-bold md:text-2xl sm:text-sm  p-8">GOT A QUESTION? SEND AN ENQUIRY</h1> -->


            {{-- <div class="circle-container">
                <label for="fileInput">
                    <div class="circle">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.Wp6ho9hwtNHXTD0tcVl3_AHaHL&pid=Api&P=0&h="
                            style="width:50%;height:40px;">
                    </div>
                    <p class="mx-48">Click to Upload Photo</p>
                </label>
                <input type="file" id="fileInput" accept="image/*" style="display:none;">
            </div> --}}

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2 text-thin" for="name">Name<sup
                        class="text-red-500 z-1 ">*</sup></label>
                <input type="text" id="name" name="name" required
                    class=" bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your name">
                @if ($errors->has('name'))
                    <div class="error text-danger">{{ $errors->first('name') }}
                    </div>
                @endif

            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="email">Email<sup
                        class="text-red-500 z-1">*</sup></label>
                <input type="email" id="email" name="email" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="phone">Contact Number<sup
                        class="text-red-500 z-1">*</sup></label>
                <input type="tel" id="phone_number" name="phone_number" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your contact number">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="course">Available Courses<sup
                        class="text-red-500 z-1">*</sup></label>
                <select id="course" name="upcommingclasses_id" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="">
                    @foreach ($upcommings as $upcoming)
                        <option value="{{ $upcoming->id }}">
                            {{ $upcoming->courses->title }}</option>
                    @endforeach


                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="school">Address</label>
                <input type="text" id="address" name="address" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your school/college name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="course">Academic Level<sup
                        class="text-red-500 z-1">*</sup></label>
                <select id="course" name="academic_level" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="">
                    <option value="">Select a level</option>
                    <option value="+2">+2</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Masters">Masters</option>
                    <option value="PHD">PHD</option>
                    <option value="Others">Others</option>
                </select>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="school">School/Colleges Name</label>
                <input type="text" id="college" name="college" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your school/college name">
            </div>


            <input type="submit" class="bg-blue-700 px-3 py-2 text-white rounded w-32 text-center cursor-pointer "
                value="Next">
            </i>


        </form>
    </div>
@endsection
