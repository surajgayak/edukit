@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- About Us -->
    @foreach ($aboutIntro as $about)
        <div class="  about flex flex-wrap justify-around items-center  p-10  bg-gray-50">

            <div class="aboutdesc " style="width:500px;">

                <h1 class="text-blue-600 font-bold text-5xl">{{ $about->title }}
                </h1>
                <p class="text-sm pt-3 "> {!! $about->description !!}
                </p>
            </div>
            <div class="image  ">
                <img src="{{ asset('images/photos/' . $about->image) }}"
                    style="border-right:10px solid rgb(64, 64, 255);border-top: 10px solid rgb(64, 64, 255); width:430px;height:450px">
            </div>
        </div>
    @endforeach


    <!-- Mission vision  and value-->

    <div class="flex justify-center text-center text-justify  flex-wrap mt-10">
        @foreach ($aboutCard as $item)
            <div class="service-item flex flex-col items-center p-4 w-96">
                <i class="fas fa-window-maximize text-4xl bg-blue-100 text-blue-500 p-3 rounded "></i>
                <h3 class="title text-lg font-semibold pt-5">{{ $item->title }}</h3>
                <p class="description text-sm text-gray-600 pt-5 text-center px-5">{!! $item->description !!}
            </div>
        @endforeach



    </div>

    <!-- counts -->
    <div class="flex flex-wrap justify-center mt-10 p-10 gap-10 bg-gray-100 ">
        <div class="years m-5 p-5 text-center">
            <i class="fas fa-clock text-4xl text-orange-400 "></i>
            <p class="count text-5xl pt-5 font-bold text-blue-600 count">5+</p>
            <p class="text-thin text-blue-400">YEARS</p>
        </div>
        <div class="course m-5 p-5 text-center">
            <i class="fas fa-book text-4xl text-orange-400"></i>
            <p class="count text-5xl pt-5 font-bold text-blue-600 count">{{ DB::table('courses')->count() }}</p>
            <p class="text-thin text-blue-400">COURSES</p>
        </div>
        <div class="student m-5 p-5 text-center">
            <i class="fas fa-heart text-4xl text-orange-400"></i>
            <p class="count text-5xl pt-5 font-bold text-blue-600 count">1000+</p>
            <p class="text-thin text-center text-blue-400">STUDENTS</p>
        </div>
    </div>

    <!-- Our Teams -->
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-12">
            <div class="mx-auto mb-8 max-w-lg text-center">
                <h2 class="text-3xl font-black sm:text-3xl text-blue-600 p-5">Our Professional Teams</h2>
            </div>
            <div class="gap-y-6 sm:gap-6 flex justify-center flex-wrap ">
                @foreach ($teams as $team)
                    <div class=" w-64 h-auto shadow-lg">
                        <a class="group block text-center">
                            <img width="600" height="600" class="aspect-[2/2] rounded-lg object-fit"
                                src="{{ asset('images/photos/' . $team->photo) }}" alt="team member" />
                            <div class="p-2">
                                <h3 class="text-xl font-bold text-gray-900">{{ $team->name }}</h3>
                                <div class="mt-1 text-sm text-gray-700">{{ $team->position }}</div>
                                <div class="flex pt-3 justify-center">
                                    <a href="{{ $team->facebook_link }}">
                                        <i class="fa-brands fa-facebook cursor-pointer"></i>
                                    </a>
                                    <a href="{{ $team->twitter_link }}">
                                        <i class="fa-brands fa-twitter pl-2 cursor-pointer"></i>
                                    </a>
                                    <a href="{{ $team->linkedin_link }}">
                                        <i class="fa-brands fa-linkedin pl-2 cursor-pointer"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
