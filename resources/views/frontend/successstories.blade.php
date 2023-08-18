@extends('layouts.frontend-layout.navfoot')
<!-- Image section -->
@section('content')
    <!-- all Success Stories -->
    <div class="flex flex-wrap max-w-screen-xl justify-center m-auto mt-5">
        @foreach ($alumnis as $alumni)
            <div class=" w-64 h-auto mx-2 my-2">
                <div class="card w-full  h-96 rounded  shadow-lg ">
                    <div class="mx-auto bg-white  h-96  rounded-lg shadow-md overflow-hidden">
                        <!-- Image -->
                        <img src="{{ asset('images/photos/' . $alumni->image) }}" alt="Person"
                            class="w-full h-48 object-fit">

                        <!-- Content -->
                        <div class=" p-4 text-sm">
                            <h2 class="text-xl font-semibold">{{ $alumni->name }}</h2>
                            <p class="text-gray-500">{{ $alumni->designation }}</p>
                            <p class="text-gray-500">{{ $alumni->placement }}</p>
                            <p class="text-sm pt-2">{!! $alumni->description !!} </p>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach


    </div>
@endsection
