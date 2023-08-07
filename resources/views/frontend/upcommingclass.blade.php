@extends('layouts.frontend-layout.navfoot')

@section('content')
    <!-- Classes -->
    <div class="course-details  mt-1 px-12  py-10 text-white">
        <!-- Breadcrumbs -->
        <div class="text-sm text-white">
            <a href="#" class="hover:text-gray-700">Home</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-gray-700">Classes</a>

        </div>

        <!-- Title of Product -->
        <h1 class="text-3xl font-semibold my-4 text-center">Our Running and Upcomming Classes</h1>

        <!-- Description -->
        <p class="text-white text-center">In order to make our candidates feel at ease, we have listed our classes
            schedule and upcomming classes.</p>
        <div class="flex justify-center pt-10">
            <i class="fas fa-arrow-down pl-2 "></i></button>
        </div>

    </div>

    <!-- class -->
    <h1 class="pt-8  pl-10 text-2xl font-bold text-center">Running Classes</h1>
    <div class="classes mt-10 flex flex-wrap justify-center gap-10">
        <div class=" w-70 bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://usa.bootcampcdn.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg"
                alt="Course Image" class="" style="width:300px;height:200px;">
            <div class="px-2 pt-4">
                <h2 class="text-xl font-semibold text-gray-800">Digital Marketing</h2>
                <p class="text-gray-600 mt-2">Duration: 4 weeks</p>
                <p class=" text-gray-400 pt-2" style="font-size:12px;">11 AM-12:30 PM</p>
                <div class="mt-4 mb-2 flex justify-around space-x-2">
                    <a href="{{ route('sendenquiry') }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded ">
                            Send Enquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                    <a href="{{ route('getadmission') }}">
                        <button class="bg-orange-500  text-white text-sm px-4 py-2 rounded ">
                            Get Admission <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class=" bg-white w-70 shadow-lg rounded-lg overflow-hidden border">
            <img src="https://www.kitwosd.com/storage/trainings/1679149366Learn(1).png" alt="Course Image" class=""
                style="width:300px;height:200px;">
            <div class="px-2 pt-4">
                <h2 class="text-xl font-semibold text-gray-800">Flutter Training</h2>
                <p class="text-gray-600 mt-2">Duration: 4 weeks</p>
                <p class=" text-gray-400 pt-2" style="font-size:12px;">11 AM-12:30 PM</p>
                <div class="mt-4 mb-2 flex justify-around space-x-2">
                    <a href="{{ route('sendenquiry') }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded ">
                            Send Enquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                    <a href="{{ route('getadmission') }}">
                        <button class="bg-orange-500  text-white text-sm px-4 py-2 rounded ">
                            Get Admission <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class=" bg-white w-70 shadow-lg rounded-lg overflow-hidden">
            <img src="https://usa.bootcampcdn.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg"
                alt="Course Image" class="" style="width:300px;height:200px;">
            <div class="px-2 pt-4">
                <h2 class="text-xl font-semibold text-gray-800">Digital Marketing</h2>
                <p class="text-gray-600 mt-2">Duration: 4 weeks</p>
                <p class=" text-gray-400 pt-2" style="font-size:12px;">11 AM-12:30 PM</p>
                <div class="mt-4 mb-2 flex justify-around space-x-2">
                    <a href="{{ route('sendenquiry') }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded ">
                            Send Enquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                    <a href="{{ route('getadmission') }}">
                        <button class="bg-orange-500  text-white text-sm px-4 py-2 rounded ">
                            Get Admission <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class=" bg-white w-70 shadow-lg rounded-lg overflow-hidden">
            <img src="https://usa.bootcampcdn.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg"
                alt="Course Image" class="" style="width:300px;height:200px;">
            <div class="px-2 pt-4">
                <h2 class="text-xl font-semibold text-gray-800">Digital Marketing</h2>
                <p class="text-gray-600 mt-2">Duration: 4 weeks</p>
                <p class=" text-gray-400 pt-2" style="font-size:12px;">11 AM-12:30 PM</p>
                <div class="mt-4 mb-2 flex justify-around space-x-2">
                    <a href="{{ route('sendenquiry') }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded ">
                            Send Enquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                    <a href="{{ route('getadmission') }}">
                        <button class="bg-orange-500  text-white text-sm px-4 py-2 rounded ">
                            Get Admission <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class=" bg-white w-70 shadow-lg rounded-lg overflow-hidden">
            <img src="https://usa.bootcampcdn.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg"
                alt="Course Image" class="" style="width:300px;height:200px;">
            <div class="px-2 pt-4">
                <h2 class="text-xl font-semibold text-gray-800">Digital Marketing</h2>
                <p class="text-gray-600 mt-2">Duration: 4 weeks</p>
                <p class=" text-gray-400 pt-2" style="font-size:12px;">11 AM-12:30 PM</p>
                <div class="mt-4 mb-2 flex justify-around space-x-2">
                    <a href="{{ route('sendenquiry') }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded ">
                            Send Enquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                    <a href="{{ route('getadmission') }}">
                        <button class="bg-orange-500  text-white text-sm px-2 py-2 rounded ">
                            Get Admission <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class=" bg-white w-70 shadow-lg rounded-lg overflow-hidden">
            <img src="https://usa.bootcampcdn.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg"
                alt="Course Image" class="" style="width:300px;height:200px;">
            <div class="px-2 pt-4">
                <h2 class="text-xl font-semibold text-gray-800">Digital Marketing</h2>
                <p class="text-gray-600 mt-2">Duration: 4 weeks</p>
                <p class=" text-gray-400 pt-2" style="font-size:12px;">11 AM-12:30 PM</p>
                <div class="mt-4 mb-2 flex justify-around space-x-2">
                    <a href="{{ route('sendenquiry') }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded ">
                            Send Enquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                    <a href="{{ route('getadmission') }}">
                        <button class="bg-orange-500  text-white text-sm px-2 py-2 rounded ">
                            Get Admission <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection
