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
            <button class="mt-10 bg-yellow-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded">VIEW FORM<i
                    class="fas fa-arrow-down pl-2"></i></button>

            <!-- Get Admission button -->
            <a href="paymentinfo.html">
                <button class="mt-10 mx-5 bg-cyan-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded">OUR
                    PAYMENT
                    OPTIONS<i class="fas fa-arrow-right pl-2"></i></button>
            </a>
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
        <form id="responsive-form" class="md:w-1/2 mx-auto bg-white  rounded px-8 pt-6 pb-8 mb-4 "
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <!-- <h1 class="text-center font-bold md:text-2xl sm:text-sm  p-8">GOT A QUESTION? SEND AN ENQUIRY</h1> -->


            <div class="circle-container">
                <label for="fileInput">
                    <div class="circle">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.Wp6ho9hwtNHXTD0tcVl3_AHaHL&pid=Api&P=0&h="
                            style="width:50%;height:40px;">
                    </div>
                    <p class="mx-48">Click to Upload Photo</p>
                </label>
                <input type="file" id="fileInput" accept="image/*" style="display:none;">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2 text-thin" for="name">Name<sup
                        class="text-red-500 z-1 ">*</sup></label>
                <input type="text" id="name" name="name" required
                    class=" bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your name">
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
                <input type="tel" id="phone" name="phone" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your contact number">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="course">Course<sup
                        class="text-red-500 z-1">*</sup></label>
                <select id="course" name="course" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="">
                    <option value="">Select a course</option>
                    <option value="course1">Web Development</option>
                    <option value="course2">MERN Stack</option>
                    <option value="course3">Flutter</option>
                    <option value="course4">Digital Marketing</option>
                    <option value="course5">React Js</option>
                    <option value="course6">Node Js</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="school">Address</label>
                <input type="text" id="school" name="school" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your school/college name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="course">Academic Level<sup
                        class="text-red-500 z-1">*</sup></label>
                <select id="course" name="course" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="">
                    <option value="">Select a level</option>
                    <option value="course1">+2</option>
                    <option value="course2">Bachelor</option>
                    <option value="course3">Masters</option>
                    <option value="course4">PHD</option>
                    <option value="course5">Others</option>
                </select>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="school">School/Colleges Name</label>
                <input type="text" id="school" name="school" required
                    class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your school/college name">
            </div>

            <div class="flex items-center justify-center">
                <button class="bg-blue-300 px-3 py-2 text-white rounded prev w-32"><i class="fas fa-arrow-left"></i>
                    Previous</button>
                <a href="paymentinfo.html">
                    <button class="bg-blue-700 px-3 py-2 text-white rounded ml-4 w-32"> Next <i
                            class="fas fa-arrow-right">
                        </i></button>
                </a>
            </div>
        </form>
    </div>
@endsection
