@extends('layouts.frontend-layout.navfoot')
@section('content')
    <div class="flex">
        <div class="w-96 ">

        </div>
        <div class="flex  flex-col  items-center">
            <h1 class="text-3xl font-bold  py-10 w-4/5 text-center">{{ $blog->title }}
            </h1>

            <img src="{{ asset('images/photos/' . $blog->image) }}" alt="" class="w-4/5 h-4/5">

            <h3 class="text-2xl text-start font-bold px-36 pt-5">{!! $blog->description !!}</h3>

            <h1 class="font-bold text-3xl px-3 pt-5">IT skills are in high demand</h1>
            <p class="w-4/5 py-3 text-xl text-gray-600">One of the most significant reasons to consider learning IT after SEE
                is that IT skills are in
                high demand.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quibusdam maxime tempora dolores impedit
                quam eaque nobis minus voluptate laboriosam dolor voluptatibus explicabo repellat quia non nemo, cumque
                asperiores doloremque.
                According to research, the demand for IT skills is growing faster than in any other area of expertise.

                IT skills are also in high demand in Nepal. A study by the Nepal Academy of Science and Technology (NAST)
                found that the country needs around 30,000 IT professionals to meet the growing demand for these skills.

                By learning IT right after SEE, you could position yourself to take advantage of these job opportunities and
                build a successful career in this field.</p>

        </div>
        <div class="w-64 "></div>
    </div>
@endsection
