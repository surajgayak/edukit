@extends('layouts.frontend-layout.navfoot')
<!-- Image section -->
{{-- #328c95 --}}
@section('content')
    <div class="herosection flex  justify-center max-w-screen-xl m-auto  p ">
        @foreach ($homeIntro as $item)
            <div class="img1 sm:w-full text-white px-5 pt-14 h-auto pb-2"
                style="width:500px; height:auto;background-color: #0e8e89;">
                <h1 class="" style="font-size:24px; font-weight:bolder;">{{ $item->title }}
                </h1>
                <br>
                <div class="text-sm ">
                    <p> {!! $item->description !!}</p>
                </div>
                <br>
                <a href="{{ route('getadmissionhomepage') }}">
                    <button class="p-3  rounded-lg text-white" style="background-color: #f96b1c">GET ADMISSION NOW<i
                            class="fas fa-arrow-right pl-2"></i></button>
                </a>
            </div>
        @endforeach

        <div id="controls-carousel" class="relative  img1" data-carousel="slide">
            <div class="relative overflow-hidden  z-40 homeslider  "style="width:600px;height:420px; ">
                @foreach ($homesliders as $homeslider)
                    <div class=" duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/medias/' . $homeslider->filename) }}" alt="..."
                            style="width:600px;height:420px;">
                    </div>
                @endforeach
            </div>

        </div>

        {{--  --}}
        <div class="img3 md:w-1/4  flex flex-col text-white ">
            <div class="pro1 h-full text-center " style="background-color:rgb(57, 170, 183);">
                <i class="fas fa-graduation-cap text-2xl pt-14"></i>
                <h1 class="text-3xl font-bolder pt-3">Professional Education</h1>
            </div>
            <div class="pro1 h-full  text-center " style="background-color:#079893;">
                <i class="fa-solid fa-check text-2xl pt-14"></i>
                <h1 class="text-3xl font-bolder pt-3">Learn to succed</h1>
            </div>
        </div>
    </div>


    <!-- Available course -->
    <div class="course max-w-screen-xl  mt-5 p-3 m-auto  mx-auto">
        <h1 class="text-2xl font-bold text-center">Available course</h1>
        <!-- card flex section -->
        <div class="max-w-full sm:w-full  mt-10 flex flex-wrap m-auto">
            <div class="card bg-white flex justify-center gap-y-5 gap-2  flex-wrap overflow-hidden m-auto ">
                @php
                    $count = 0;
                @endphp

                @foreach ($courses as $course)
                    @if ($count < 4)
                        <div class="card-info relative rounded overflow-hidden ">
                            <img src="{{ asset('images/photos/' . $course->image) }}" alt="Card Image"
                                class="w-72 h-44 object-cover">
                            <div class="learnmore">
                                <a href="{{ route('coursecontent', $course) }}">
                                    <span class="absolute top-20 left-24 cursor-pointer">Learn More<i
                                            class="fas fa-arrow-right pl-2"></i></span>
                                </a>
                            </div>

                            <h2 class="card-title text-sm text-gray-800 font-bold pt-3">{{ $course->title }}</h2>
                            <p class="card-duration text-gray-400 pt-2">Duration: <span
                                    class="text-black">{{ $course->duration }}</span></p>
                        </div>

                        @php
                            $count++;
                        @endphp
                    @else
                    @break
                @endif
            @endforeach


            {{-- <div class="flex justify-center  w-full mt-10">
                <a href="{{ route('allcourse') }}">
                    <button class="bg-blue-500 p-2 text-white rounded ">View All Course<i
                            class="fas fa-arrow-right pl-2"></i></button>
                </a>
            </div> --}}
        </div>
    </div>
</div>

<!-- Course Status -->

<div class=" mt-10">
    {{-- <h1 class="text-center font-bold text-2xl">Our Course Status</h1>
    <p class="text-center pt-5">Take a glance at the status of our classes. Choose your course, let us know your
        time and
        we will fit you in the required schedule.</p> --}}
    <div class="flex justify-center flex-wrap gap-5 mt-10 ">
        <div class="course1  w-80 text-center p-5 rounded-lg text-white" style="background-color:#1fa6b3">
            <img src="https://broadwayinfosys.com/uploads/logo/1659689859_85925.svg" class="w-32 h-32 m-auto">
            <p class="font-bold text-3xl">{{ DB::table('upcommingclasses')->count() }}</p>
            <a href="{{ route('classes') }}">
                <p>Upcomming Classes <i class="fas fa-arrow-right"></i></p>
            </a>
        </div>


        <div class="course1  w-80 text-center p-5 rounded-lg text-white" style="background-color:#1d6ac2">
            <img src="https://broadwayinfosys.com/uploads/logo/1659689859_12431.svg" class="w-32 h-32 m-auto">
            <p class="font-bold text-3xl">{{ DB::table('courses')->count() }}</p>
            <a href="{{ route('allcourse') }}">
                <p>All courses <i class="fas fa-arrow-right"></i></p>
            </a>
        </div>

    </div>
</div>
{{-- #ebf9f7 --}}
<!-- Placement partners -->
<div class=" mt-20 p-5 max-w-screen-xl m-auto" style="background-color: #ebf9f7">

    <h1 class="text-center text-2xl font-bold">Our Placement Partners</h1>
    <p class="text-center pt-5 px-40  placementtext ">Since 2008, the year we began our journey as a
        professional IT
        Learning
        Institute,
        we
        have seen many of our students become part of organizations and, as a result, they have furthered their
        careers in their area of expertise. Our Placement Partners have granted opportunities to our students which,
        we can proudly say, they have duly taken!</p>
    <div class="flex justify-center flex-wrap mt-10 gap-6">
        @php
            $count = 0;
        @endphp
        @foreach ($placements as $placement)
            @if ($count < 6)
                <div class="partner1 w-36 px-5 h-20 bg-white ">
                    <img src="{{ asset('images/medias/' . $placement->filename) }}" class="w-18 mt-2 h-16 m-auto">
                </div>
                @php
                    $count++;
                @endphp
            @else
            @break
        @endif
    @endforeach


</div>
<div class="flex justify-center mt-10">
    <a href="{{ route('all-placementpartner') }}">
        <button class="text-blue-800  p-2  rounded">View All<i class="fas fa-arrow-right pl-2"></i></button>
    </a>
</div>
</div>

<!-- Images Gallery -->
<div class=" mt-10 ">
<h1 class="text-center font-bold text-2xl ">Our Strength Our Assets</h1>
<p class="text-center pt-5 px-20">We not only offer career-oriented IT training in Nepal as per industry needs
    but
    also
    assist in
    successful
    job placements for deserving students and professionals.</p>
<div class="imagegallery mt-10">
    <div class="imagegallery1 flex flex-wrap justify-center">
        @php
            $count = 0;
        @endphp
        @foreach ($cards as $index => $card)
            @if ($count < 3)
                <div class="gal1 w-96 h-96">
                    <img src="{{ asset('images/medias/' . $card->filename) }}" alt=""
                        class="w-96 h-96 object-fill">
                </div>
                <div class="gal2 w-96  pt-20 gal" style="background-color:#12939f">
                    @if ($staticImageUrls[$index])
                        <img src="{{ $staticImageUrls[$index] }}" class="h-24 m-auto">
                    @endif
                    <h1 class="text-2xl text-white text-center pt-5">{{ $staticTextContents[$index] }} </h1>
                </div>
                @php
                    $count++;
                @endphp
            @else
            @break
        @endif
    @endforeach



</div>
</div>

<!-- Success Stories -->
<div class="mt-16 max-w-screen-xl m-auto mb-2 mx-auto">
<h1 class="text-2xl font-bold text-center">Success Stories</h1>
<p class="px-60 text-center pt-5 success">By providing value-added services we have guided hundreds of
    businesses to
    attain
    competitive
    advantage and inspired thousands of professionals to excel in their career.</p>
<div data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true}'
    class="center flex  flex-wrap mx-7 p-5 relative z-1   ">
    @foreach ($alumnis as $alumni)
        <div class="w-auto h-96  mx-2 my-1 jesus  ">
            <div class="card w-70 rounded  shadow-lg h-96 ">
                <div class="w-70 h-96 mx-auto bg-white rounded-lg shadow-md overflow-hidden ">
                    <!-- Image -->
                    <img src="{{ asset('images/photos/' . $alumni->image) }}" alt="Person"
                        style="width:300px; height:200px; background-size:cover; ">

                    <!-- Content -->
                    <div class=" p-4 text-sm h-atuo">
                        <h2 class="text-xl font-semibold">{{ ucfirst($alumni->name) }}</h2>

                        <h2 class="text-gray-500 font-bold">{{ ucfirst($alumni->designation) }}</h2>
                        <p class="text-gray-500">{{ ucfirst($alumni->placement) }}</p>
                        <p class="text-sm pt-2">{!! $alumni->description !!} </p>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

</div>
<a href="{{ route('successstories') }}" class="flex justify-center ">
    <button class="m-auto  p-2 rounded text-white " style="background-color:#f96b1c">View All<i
            class="fas fa-arrow-right pl-2"></i></button>

</a>
</div>
@endsection
<!-- footer -->
