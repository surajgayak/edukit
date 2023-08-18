@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- course details -->
    <div class="course-details  mt-1 px-12  py-10 text-white">
        <!-- Breadcrumbs -->
        <div class="text-sm text-white">
            <a href="#" class="hover:text-gray-700">Home</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-gray-700">Course</a>

        </div>

        <!-- Title of Product -->
        <h1 class="text-3xl font-semibold my-4">{{ $courses->title }}</h1>

        <!-- Description -->
        <p class="text-2xl text-white font-bold " style="color:white !important;">{!! $courses->introduction !!}</p>

        <!-- Duration with time icons -->
        <div class="flex items-center mt-4">
            <i class="fas fa-clock text-white"></i>
            <span class="text-white pl-2">Duration: {{ $courses->duration }}</span>
        </div>

        <!-- Enquiry button -->
        {{-- <a href="sendenquiry.html">
            <button class="mt-5 bg-yellow-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded">Enquiry<i
                    class="fas fa-arrow-right pl-2"></i></button>
        </a> --}}
        <!-- Get Admission button -->
        <a href="{{ route('getadmission') }}">
            <button class="mt-5  bg-yellow-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded ml-3">Get
                Admission<i class="fas fa-arrow-right pl-2"></i></button>
        </a>
    </div>

    <!-- course overview -->
    <div class="course-overview px-12 py-5">
        <ul class="flex justify-start gap-10">
            <a href="#content">
                <li class="cursor-pointer">Course Overview</li>
            </a>
            <a href="#benefit">
                <li class="cursor-pointer">Course Benefit</li>
            </a>
            <a href="#syllabus">
                <li class="cursor-pointer"> Course Syllabus</li>
            </a>

        </ul>
    </div>
    <hr>
    <!-- course contents -->
    <div class="content flex justify-center flex-wrap pt-5 md:max-w-full " id="content">
        <div class="desc w-1/2  px-12 py-5">
            <h1 class="text-orange-500 text-2xl">Description</h1>
            <p class="text-black pt-3">
                {!! $courses->description !!}
            </p>
            <br>
            <p class="hidden " id="remainingContent" class="text-gray-500">
                There is a strong demand for qualified web designers in Nepal and globally due to the expanding market
                for websites and online-based applications.
                <br><br>
                The core objective of the course is to train aspiring web designers in Nepal to create user-friendly
                websites adopting modern web design concepts. Hence, Kitwosd has succeeded in accomplishing its
                objective since its inception.
            </p>
            <button id="showMoreBtn" onclick="showMoreContent()" class="text-center ml-52 mt-3  ">Show More <span><i
                        class="fa-solid fa-arrow-down"></i></span></button>
            <hr class="mt-3">
            <!-- Benefit section -->
            <div class="mt-10" id="benefit" class="pt-10">
                <h1 class="text-orange-500 text-2xl">Benefit</h1>
                </h2>
                <p class="pt-2">{!! $courses->benefit !!}
                    <br><br>
                <p class="hidden " id="remainingContent1" class="text-gray-500">
                    Job Possibilities: After completing a web design school, you can get employment as a front-end
                    developer, UI/UX designer, or freelance web designer. For web designers, there are numerous
                    prospects in Nepal and other nations.
                    <br><br>
                    Practical Knowledge and Skills: A web design course equips students with knowledge and skills that
                    they can use on actual projects. You'll discover how to design websites, make responsive layouts,
                    and search engine-optimize webpages.
                </p>
                <button id="showMoreBtn1" onclick="showMoreContent1()" class="text-center ml-52 mt-3  ">Show More
                    <span><i class="fa-solid fa-arrow-down"></i></span></button>
            </div>
            <hr class="mt-3">

            <h1 class="text-orange-500 pt-10 text-2xl " id="syllabus">Syllabus</h1>
            <!-- Syllabus  -->
            @foreach ($courses->syllabuses as $item)
                <div class="syllabus mt-10">
                    <span class="text-xl">{{ $item->title }}</span>
                    <i class="fas fa-chevron-down float-right pt-1 text-gray-400 cursor-pointer expand-icon"></i>
                    <div class="content">
                        {!! $item->description !!}
                    </div>
                    <hr class="mt-3">
                </div>
            @endforeach


            <!-- Vacancy -->
            <div class="vacancy mt-10" id="vacancy">
                <!-- Related Course -->
                <div class="">
                    <h1 class="text-orange-500 text-2xl mt-10">Related Course</h1>
                    <div class="flex pt-10 flex-wrap gap-3  justify-between allcourse ">
                        <div class="div1 flex items-center gap-2 cursor-pointer">
                            <img src="https://broadwayinfosys.com/uploads/courses/96701664435119.png" alt=""
                                class="w-28 h-18">
                            <span>React JS</span>
                        </div>
                        <div class="div1 flex items-center gap-2 cursor-pointer">
                            <img src="https://broadwayinfosys.com/uploads/courses/52921688366553.jpg" alt=""
                                class="w-28 h-18">
                            <span>Flutter Training</span>
                        </div>
                        <div class="div1 flex items-center gap-2 cursor-pointer">
                            <img src="https://broadwayinfosys.com/uploads/courses/82081664435520.png" alt=""
                                class="w-28 h-18">
                            <span>Digital Marketing</span>
                        </div>
                        <div class="div1 flex items-center gap-2 cursor-pointer">
                            <img src="https://broadwayinfosys.com/uploads/courses/96701664435119.png" alt=""
                                class="w-28 h-18">
                            <span>Mern Stack</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- forms -->
        <div class="contain mx-auto px-4 py-5">
            <form action={{ route('sendenquiry-store') }} method="post" id="responsive-form"
                class="md:w-4/5 mx-auto bg-white  rounded px-8 pt-6 pb-8 mb-4 "
                style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                @csrf
                <h1 class="text-center font-bold md:text-2xl sm:text-sm  p-8">GOT A QUESTION? SEND AN ENQUIRY</h1>

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
                    <input type="number" id="contact" name="contact" required
                        class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter your contact number">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm  mb-2" for="course">Course<sup
                            class="text-red-500 z-1">*</sup></label>
                    <select id="course" name="course" required
                        class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="">

                        <option value="{{ $courses->title }}">{{ $courses->title }}</option>

                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm  mb-2" for="school">School/Colleges Name</label>
                    <input type="text" id="college" name="college" required
                        class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter your school/college name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm  mb-2" for="school">Message</label>
                    <textarea id="school" rows="7" cols="50" name="message" required
                        class="bg-gray-100 text-sm appearance-none border rounded w-full  py-2  text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Tell us about you">
            </textarea>
                </div>
                <div class="flex items-center justify-center">
                    <input type="submit" value="Submit"
                        class="bg-blue-500 text-sm hover:bg-blue-700 text-white  py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer">
                </div>
            </form>

        </div>
    </div>
@endsection
