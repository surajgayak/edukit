@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- enquiry forms -->
    <div class="contain mx-auto px-4 py-10">
        <form action={{ route('sendenquiry-store') }} method="post" id="responsive-form"
            class="md:w-1/2 mx-auto bg-white  rounded px-8 pt-6 pb-8 mb-4 "
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            @csrf
            <h1 class="text-center font-bold md:text-2xl sm:text-sm  p-8">GOT A QUESTION? SEND AN ENQUIRY</h1>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2 text-thin" for="name">Name<sup
                        class="text-red-500 z-1 ">*</sup></label>
                <input type="text" id="name" name="name" required
                    class=" bg-gray-100 text-sm   rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight"
                    placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="email">Email<sup
                        class="text-red-500 z-1">*</sup></label>
                <input type="email" id="email" name="email" required
                    class="bg-gray-100 text-sm   rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight"
                    placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="phone">Contact Number<sup
                        class="text-red-500 z-1">*</sup></label>
                <input type="number" id="contact" name="contact" required
                    class="bg-gray-100 text-sm   rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight"
                    placeholder="Enter your contact number">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="course">Course<sup
                        class="text-red-500 z-1">*</sup></label>
                <select id="course" name="course" required
                    class="bg-gray-100 text-sm   rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight" placeholder="">
                    <option value="">Select a course</option>

                    @foreach ($courses as $course)
                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                    @endforeach


                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="school">School/Colleges Name</label>
                <input type="text" id="college" name="college" required
                    class="bg-gray-100 text-sm   rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight"
                    placeholder="Enter your school/college name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm  mb-2" for="school">Message</label>
                <textarea id="school" rows="7" cols="50" name="message" required
                    class="bg-gray-100 text-sm appearance-none  rounded w-full  py-2  text-gray-700 leading-tight"
                    placeholder="Tell us about you">
            </textarea>
            </div>
            <div class="flex items-center justify-center">
                <input type="submit" value="Submit"
                    class="bg-blue-500 text-sm hover:bg-blue-700 text-white  py-2 px-4 rounded cursor-pointer">
            </div>
        </form>
    </div>
@endsection
