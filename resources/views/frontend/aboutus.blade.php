@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- About Us -->
    <div class="  about flex flex-wrap justify-center items-center  p-10 gap-10 bg-gray-50">
        <div class="aboutdesc w-1/3">
            <h1 class="text-blue-500 font-bold text-4xl">ABOUT US
            </h1>
            <p class="text-sm pt-3 "> "Kitwosd IT Support Center is a leading provider of comprehensive IT solutions
                and
                services. Our team of
                experienced technicians and consultants is dedicated to helping businesses of all sizes achieve their
                technology goals. Whether you need support with Website Development, App Development, Digital Marketing,
                or
                any other IT challenge, we have the expertise to deliver the results you need.
                <br><br>

                At Kitwosd IT Support Center, we believe in delivering personalized, customer-centric solutions that
                meet
                the unique needs of each of our clients. We work closely with you to understand your business and its
                technology requirements, and we develop customized IT strategies to help you achieve your goals. Our
                goal is
                to become your trusted partner in technology, and to help you take your business to the next level.

            </p>
        </div>
        <div class="image  ">
            <img src="https://www.kitwosd.com/storage/teams/1675410932286202592_4551966011573376_3075857284343569016_n.jpg"
                style="border-right:10px solid rgb(64, 64, 255);border-top: 10px solid rgb(64, 64, 255); width:430px;height:450px">
        </div>
    </div>

    <!-- Mission vision  and value-->

    <div class="flex justify-center gap-5 flex-wrap mt-10">
        <div class="service-item flex flex-col items-center p-4 w-96">
            <i class="fas fa-window-maximize text-4xl bg-blue-100 text-blue-500 p-3 rounded "></i>
            <h3 class="title text-lg font-semibold pt-5">Our Mission</h3>
            <p class="description text-sm text-gray-600 pt-5 text-center px-5">Welcome to [Company Name], a leading
                company in [Industry/Market]. Since our establishment in [Year], we have been dedicated to
                [Purpose/Vision]. Our commitment to excellence and innovation has allowed us to become a trusted name in
                the industry, serving customers from all over the world.</p>
        </div>

        <div class="service-item flex flex-col items-center p-4 w-96">
            <i class="fas fa-tag text-4xl bg-blue-100 text-blue-500 px-4 py-3 rounded"></i>
            <h3 class="title text-lg font-semibold pt-5">Our Value</h3>
            <p class="description text-sm text-gray-600 pt-5 text-start px-5">
            <p class="text-gray-600 text-sm ">Skill Based Training</p>
            <p class="text-gray-600 text-sm pt-3 ">Quality Education</p>
            <p class="text-gray-600 text-sm pt-3 ">Excellence</p>
            <p class="text-gray-600 text-sm pt-3 ">Collaboration</p>
            </p>
        </div>

        <div class="service-item flex flex-col items-center p-4 w-96">
            <i class="fas fa-eye text-4xl bg-blue-100 text-blue-500 p-3 rounded"></i>
            <h3 class="title text-lg font-semibold pt-5">Our Vision</h3>
            <p class="description text-sm text-gray-600 pt-5 text-center px-5">Our vision is to be a leading [industry
                or sector] company, recognized for our innovation, excellence, and commitment to [specific area of
                focus]. We aim to continually evolve and adapt to the changing needs of our customers, staying at the
                forefront of technology and industry trends to ensure we deliver the best possible solutions.

            </p>
        </div>

    </div>

    <!-- counts -->
    <div class="flex flex-wrap justify-center mt-10 p-10 gap-10 bg-gray-100 ">
        <div class="years m-5 p-5 text-center">
            <i class="fas fa-clock text-4xl text-blue-500 "></i>
            <p class="count text-7xl pt-5 font-bold text-blue-500 count">5+</p>
            <p class="text-thin text-blue-400">YEARS</p>
        </div>
        <div class="course m-5 p-5 text-center">
            <i class="fas fa-book text-4xl text-blue-500"></i>
            <p class="count text-7xl pt-5 font-bold text-blue-500 count">6+</p>
            <p class="text-thin text-blue-400">COURSES</p>
        </div>
        <div class="student m-5 p-5 text-center">
            <i class="fas fa-heart text-4xl text-blue-500"></i>
            <p class="count text-7xl pt-5 font-bold text-blue-500 count">1000+</p>
            <p class="text-thin text-center text-blue-400">STUDENTS</p>
        </div>
    </div>

    <!-- Our Teams -->
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-12">
            <div class="mx-auto mb-8 max-w-lg text-center">
                <h2 class="text-2xl font-black sm:text-3xl text-blue-500 p-5">Our Professional Teams</h2>
            </div>
            <div class="grid grid-cols-12 gap-y-6 sm:gap-6">
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <a class="group block  text-center">
                        <img width="600" height="600" class="aspect-[2/2] rounded-lg object-cover"
                            src="https://www.kitwosd.com/storage/teams/1675410932286202592_4551966011573376_3075857284343569016_n.jpg"
                            alt="team member" />
                        <div class="p-2">
                            <h3 class="text-xl font-bold text-gray-900 ">Aashish Kumar Jha</h3>
                            <div class="mt-1 text-sm text-gray-700">FOUNDER & CEO</div>
                            <i class="fa-brands fa-facebook pt-3 cursor-pointer"></i>
                            <i class="fa-brands fa-twitter pl-2 pt-3 cursor-pointer"></i>
                            <i class="fa-brands fa-linkedin pl-2 pt-3 cursor-pointer"></i>

                        </div>
                    </a>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <a class="group block  text-center">
                        <img width="600" height="600" class="aspect-[2/2] rounded-lg object-cover"
                            src="https://www.kitwosd.com/storage/teams/1679145428WhatsAppImage2023-03-18at6.jpg"
                            alt="team member" />
                        <div class="p-2">
                            <h3 class="text-xl font-bold text-gray-900 ">Bijaya Maharjan</h3>
                            <div class="mt-1 text-sm text-gray-700">Project Manager</div>
                            <i class="fa-brands fa-facebook pt-3 cursor-pointer"></i>
                            <i class="fa-brands fa-twitter pl-2 pt-3 cursor-pointer"></i>
                            <i class="fa-brands fa-linkedin pl-2 pt-3 cursor-pointer"></i>
                        </div>
                    </a>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <a class="group block  text-center">
                        <img width="600" height="600" class="aspect-[2/2] rounded-lg object-cover"
                            src="https://www.kitwosd.com/storage/teams/1679145678ranjit_Photo.jpg" alt="team member" />
                        <div class="p-2">
                            <h3 class="text-xl font-bold text-gray-900 ">Dip Sapkota</h3>
                            <div class="mt-1 text-sm text-gray-700">MERN STACK DEVELOPER</div>
                            <i class="fa-brands fa-facebook pt-3 cursor-pointer"></i>
                            <i class="fa-brands fa-twitter pl-2 pt-3 cursor-pointer"></i>
                            <i class="fa-brands fa-linkedin pl-2 pt-3 cursor-pointer"></i>
                        </div>
                    </a>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <a class="group block text-center">
                        <img width="600" height="600" class="aspect-[2/2] rounded-lg object-cover"
                            src="https://images.pexels.com/photos/874158/pexels-photo-874158.jpeg?auto=compress&cs=tinysrgb&w=1200"
                            alt="team member" />
                        <div class="p-2 ">
                            <h3 class="text-xl font-bold text-gray-900">Amrit Sangtang</h3>
                            <div class="mt-1 text-sm text-gray-700">Python Developer</div>

                        </div>
                        <i class="fa-brands fa-facebook pt-3 cursor-pointer"></i>
                        <i class="fa-brands fa-twitter pl-2 pt-3 cursor-pointer"></i>
                        <i class="fa-brands fa-linkedin pl-2 pt-3 cursor-pointer"></i>
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
