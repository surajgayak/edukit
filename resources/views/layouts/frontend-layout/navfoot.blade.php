<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukit</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />



</head>

<body>
    <!-- navbar -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <nav aria-label="navbar" x-data class="border-b fixed w-full z-50 " style="background-color: #f0fbfaf0">
        <div class="mx-auto max-w-screen-xl  py-2 shadow-sm flex-wrap  ">
            <div
                class="flex items-center w-11/12 m-auto flex-wrap sm:justify-center sm:gap-3  md:justify-between   main ">
                <div>
                    <a href="{{ url('/') }}" class="cursor-pointer">
                        <img class="h-24 w-24" src="/images/logo.png" alt="website logo" />
                    </a>
                </div>
                <div class="flex items-center gap-x-10  sm:justify-between  middle relative  ml-10  ">
                    <div class="drop  py-4 allcourse cursor-pointer">
                        <i class="fas fa-bars text-xl text-gray-300  "></i>
                        <span class="pl-2 md:text-lg font-bold  " style="font-size:14px; ">
                            All courses
                            <div class="dropdown-content bg-white w-auto shadow-lg "
                                style="position:absolute;top:60px;left:-40px;">
                                <ul style="width:355px;font-weight: 400; padding-top:10px;">
                                    @foreach ($courses as $course)
                                        <a href="{{ route('coursecontent', $course) }}">
                                            <div
                                                class="flex cursor-pointer justify-start items-center hover:bg-gray-100">
                                                <li class="pl-5 ">{{ $course->title }} </li>
                                                <i class="fas fa-chevron-right ml-auto pr-3"></i>
                                            </div>
                                        </a>
                                    @endforeach


                                    <hr>
                                    <div>
                                        <a href="{{ route('allcourse') }}">
                                            <button class="bg-orange-500 rounded p-2 text-white m-3">Explore All
                                                Courses</button>
                                        </a>
                                    </div>

                                </ul>
                            </div>
                        </span>
                    </div>
                    <div class="search relative">
                        <input type="text"
                            class="border outline-none text-sm py-2 pl-5 px-10 sm:w-72 md:w-80  rounded-full inputbox"
                            placeholder="What do you want to learn?"><i
                            class="fas fa-search absolute right-3 text-gray-400 top-3"></i>
                    </div>
                </div>

                <div class="sm:flex items-center end  last">
                    <span class="px-2 call font-bold" style="font-size: 10px ;">Call us: 9841002000<br>01-4111849 /
                        9808724535</span>
                    <a href="{{ route('sendenquiry') }}"
                        class="flex cursor-pointer items-center gap-x-1 rounded-lg  px-5 ml-5 py-3 text-sm
                        font-medium text-gray-50 hover:bg-blue-700"
                        style="background-color: #f96b1c">
                        <span>Enquiry</span>
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- menu -->
    <div class="container max-w-full pt-28   " style="background-color: #ffffff">
        <div class="w-full overflow-x-auto">
            <ul class="flex flex-nowrap md:w-3/5 sm:w-full  justify-around my-1  gap-3 m-auto space-x-2 menu ">
                <li class="p-2 font-bold  w-34  text-center mt-1 "><a href="{{ route('gallery') }}"> Gallery</a></li>
                <li class="p-2 font-bold  w-34  text-center mt-1 "><a href="{{ route('aboutus') }}"> About Us</a></li>
                <li class="p-2 font-bold  w-34  text-center mt-1 "><a href="{{ route('classes') }}">Upcoming
                        Classes</a>
                </li>
                <li class="p-2 font-bold  w-34  text-center mt-1 "><a href="{{ route('contact') }}">Contact Us</a></li>
                <li class="p-2 font-bold  w-34  text-center mt-1 "><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

    <footer aria-label="Site footer" class=" bg-gradient-to-b from-stone-800 to-gray-800 pl-14 py-10 mt-4 md:py-10">
        <div class="mx-auto max-w-screen-xl">
            <div class="grid grid-cols-12 gap-y-8 sm:gap-8">
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <ul class="flex flex-col gap-y-2">
                        <li class="text-xl font-bold text-white">COMPANY</li>
                        <li>
                            <a href="{{ route('gallery') }}"
                                class="cursor-pointer text-md text-white hover:text-gray-300/60">Our Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('aboutus') }}"
                                class="cursor-pointer text-md text-white hover:text-gray-300/60">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="cursor-pointer text-md text-white hover:text-gray-300/60">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('classes') }}"
                                class="cursor-pointer text-md text-white hover:text-gray-300/60">Our Classes</a>
                        </li>
                        {{-- <li>
                            <a
                                href="{{ route('placementpartner',) }}"class="cursor-pointer text-md text-white hover:text-gray-300/60">Our
                                Placement
                                Partners</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('blog') }}"
                                class="cursor-pointer text-md text-white hover:text-gray-300/60">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <ul class="flex flex-col gap-y-2">
                        <li class="text-lg font-bold text-white">HELP</li>



                        <li>
                            <a class="cursor-pointer text-md text-white hover:text-gray-300/60">Disclaimer</a>
                        </li>

                        <li>
                            <a class="cursor-pointer text-md text-white hover:text-gray-300/60">Terms &
                                Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <ul class="flex flex-col gap-y-2">
                        <li class="text-lg font-bold text-white">CONTACT US</li>
                        <li>
                            <p class=" text-md text-white hover:text-gray-300/60">
                                {{ $settings->name }}
                            </p>
                        </li>
                        <li>
                            <a class=" text-md text-white hover:text-gray-300/60">
                                {{ $settings->location }}
                            </a>
                        </li>
                        <li>
                            <a class=" text-md text-white hover:text-gray-300/60">{{ $settings->email }}</a>
                        </li>
                        <li>
                            <a class=" text-md text-white hover:text-gray-300/60">{{ $settings->whatsapp_number }}</a>
                        </li>
                        <li>
                            <a class=" text-md text-white hover:text-gray-300/60">{{ $settings->viber_number }}</a>
                        </li>

                    </ul>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3">
                    <div>
                        <a class="flex  items-center gap-x-1 text-white transition-all duration-300 hover:opacity-80">
                            <div>

                                <span class="text-2xl font-bold "
                                    style="color: #e1fffe ">{{ $settings->name }}</span>
                            </div>
                        </a>
                        <div class="mt-3 text-md text-white">{{ $settings->location }}</div>

                        <p class="pt-2">
                            <a
                                class=" font-medium text-white   hover:text-gray-300/60 focus:text-gray-300/60 ">{{ $settings->email }}</a>
                        </p>
                        <p class="pt-2">
                            <a class=" font-medium text-white  hover:text-gray-300/60 focus:text-gray-300/60 ">Estd
                                :
                                {{ $settings->establish_date }}</a>
                        </p>

                        <a class="my-3 block  text-sm text-white">{{ $settings->mobile_number }}/
                            {{ $settings->landline_number }}</a>

                        <ul class="mt-6 flex gap-6">
                            <li>
                                <a href="{{ $settings->facebook_link }}" rel="noreferrer" target="_blank"
                                    class="text-gray-300 transition hover:text-gray-300/60 focus:text-gray-300/60">
                                    <span class="sr-only">Facebook</span>

                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $settings->instagram_link }}" rel="noreferrer" target="_blank"
                                    class="text-gray-300 transition hover:text-gray-300/60 focus:text-gray-300/60">
                                    <span class="sr-only">Instagram</span>

                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.367.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $settings->twitter_link }}" rel="noreferrer" target="_blank"
                                    class="text-gray-300 transition hover:text-gray-300/60 focus:text-gray-300/60">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $settings->linkden_link }}" rel="noreferrer" target="_blank"
                                    class="text-gray-300 transition hover:text-gray-300/60 focus:text-gray-300/60">
                                    {{-- <span class="sr-only">LinkedIn</span> --}}
                                    <i class="fa-brands fa-linkedin" style="font-size:20px;"></i>

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <p class="text-white">We accepts :</p>
                <div class="flex gap-2  ">
                    @foreach ($paymentmethods as $payment)
                        <a href="">
                            <img src="{{ asset('images/medias/' . $payment->logo) }}" class="w-24 h-14 ">
                        </a>
                    @endforeach


                </div>
                <br>
                <div class="text-sm font-medium text-gray-300">&copy; 2023 All right reserved | Made by Kitwosd
                </div>

            </div>
        </div>
    </footer>


    <script script type="text/javascript">
        $(document).ready(function() {
            $('.center').slick({
                arrows: true,
                centerMode: true,
                prevArrow: '<button type="button" class="slick-prev absolute top-40 left-5   text-white  rounded-full z-10"><i class="fas fa-arrow-left" style="background-color:orange;color:white;width:30px;height:30px;border-radius:50px; padding-top:6px;"></i></button>',
                nextArrow: '<button type="button" class="slick-next absolute top-40 right-5  text-white  rounded-full z-10"><i class="fas fa-arrow-right" style="background-color:orange;color:white;width:30px;height:30px;border-radius:50px; padding-top:6px;"></i></button>',
                centerPadding: '0px',
                slidesToShow: 2,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            prevArrow: '<button type="button" class="slick-prev absolute top-32 left-5   text-white  rounded-full z-10"><i class="fas fa-arrow-left" style="background-color:orange;color:white;width:24px;height:24px;border-radius:50px; padding-top:4px;"></i></button>',
                            nextArrow: '<button type="button" class="slick-next absolute top-32 right-5  text-white  rounded-full z-10"><i class="fas fa-arrow-right" style="background-color:orange;color:white;width:24px;height:24px;border-radius:50px; padding-top:4px;"></i></button>',
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            prevArrow: '<button type="button" class="slick-prev absolute top-32 left-5   text-white  rounded-full z-10"><i class="fas fa-arrow-left" style="background-color:orange;color:white;width:24px;height:24px;border-radius:50px; padding-top:4px;"></i></button>',
                            nextArrow: '<button type="button" class="slick-next absolute top-32 right-5  text-white  rounded-full z-10"><i class="fas fa-arrow-right" style="background-color:orange;color:white;width:24px;height:24px;border-radius:50px; padding-top:4px;"></i></button>',
                            centerMode: true,
                            centerPadding: '24px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>


</body>

</html>
