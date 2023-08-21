{{--  --}}
@extends('layouts.frontend-layout.navfoot')

@section('content')
    <div class="flex justify-between items-center mx-auto my-8 w-2/5 ">
        <div class="circles1 w-7 rounded-full  text-center text-white font-thin" style="background-color: #f96b1c">1</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles2 w-7 rounded-full bg-gray-400 text-center text-white font-thin" style="background-color: #f96b1c">
            2</div>
        <div class="line h-px bg-gray-400 w-64"></div>
        <div class="circles3 w-7 rounded-full bg-gray-400 text-center text-white font-thin"
            style="background-color: #f96b1c;">3</div>
    </div>

    <div class="flex flex-wrap justify-center w-full mt-10 m-auto mb-5 pl-3 shadow-lg pb-2 h-auto">
        <div class="w-2/5">
            <div class="details">
                <h1 class="text-2xl font-bold pl-3">Details</h1>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" style="width: 100%">

                    <tbody class="">
                        <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Name
                            </th>
                            <td class="px-6 py-4">
                                {{ ucfirst($admissions->name) }}
                            </td>

                        </tr>
                        <tr class=" border-b dark:bg-gray-800 bg-white dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Email</td>
                            <td class="px-6 py-4">{{ $admissions->email }}</td>
                        </tr>
                        <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Contact</td>
                            <td class="px-6 py-4">{{ $admissions->phone_number }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Address</td>
                            <td class="px-6 py-4">{{ ucfirst($admissions->address) }}</td>
                        </tr>
                        <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Course</td>
                            <td class="px-6 py-4">
                                {{ ucfirst($admissions->upcommingclasses->courses->title) }}
                            </td>
                        </tr>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Academic Level</td>
                            <td class="px-6 py-4">{{ ucfirst($admissions->academic_level) }}</td>
                        </tr>
                        <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                School/College</td>
                            <td class="px-6 py-4">{{ ucfirst($admissions->college) }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Payment Way</td>
                            <td class="px-6 py-4">{{ ucfirst($admissions->paymentmethods->title) }}</td>
                        </tr>
                        <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Amount</td>
                            <td class="px-6 py-4">Rs.{{ ucfirst($admissions->payment_amount) }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Payment Screeenshot</td>
                            <td class="px-6 py-4"><img src="{{ asset('images/medias/' . $admissions->payment_image) }} "
                                    class="w-40 h-40">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-end mr-1 pt-2">
                    <a href="{{ route('welcomepage') }}">
                        <button class="p-2  text-white rounded w-32" style="background-color: #f96b1c">Done</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- ... Add content for the second half of the layout if needed ... -->
    </div>
@endsection
