@extends('layouts.frontend-layout.navfoot')
@section('content')
    <!-- contacts -->
    <div class="contacts flex flex-wrap justify-center gap-5 ">
        <div class="enquiry ">
            <div class="contain mx-auto px-4 py-10">
                <form id="responsive-form" class="md:w-5/6 mx-auto bg-white  rounded px-8 pt-6 pb-8 mb-4 "
                    style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
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
                        <input type="tel" id="phone" name="phone" required
                            class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Enter your contact number">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm  mb-2" for="course">Course<sup
                                class="text-red-500 z-1">*</sup></label>
                        <select id="course" name="course" required
                            class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="">

                            <option value="">Select a course</option>
                            <option value="course1">Web Development</option>
                            <option value="course2">MERN Stack</option>
                            <option value="course3">Flutter</option>
                            <option value="course4">Digital Marketing</option>
                            <option value="course5">React Js</option>
                            <option value="course6">Node Js</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm  mb-2" for="school">School/Colleges Name</label>
                        <input type="text" id="school" name="school" required
                            class="bg-gray-100 text-sm appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Enter your school/college name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm  mb-2" for="school">Message</label>
                        <textarea id="school" rows="5" cols="50" name="message" required
                            class="bg-gray-100 text-sm px-2 appearance-none border rounded w-full  py-2  text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
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
        <div class="info  md:w-1/3 sm:w-4/5 px-5  py-16 ">
            <h1 class="text-orange-500 text-2xl font-bold">Kitwosd IT Support Center</h1>
            <i class="fas fa-location pt-3 text-2xl"></i>
            <span class="pt-3 pl-3">Gwarko,Kathmandu 44600, Nepal</span>
            <br><br>
            <i class="fas fa-phone text-2xl"></i>
            <span class="pt-3 pl-3">+977-1-4117578 / 4111849 / 4111583 / 5912405 </span>
            <br><br>
            <i class="fas fa-message text-2xl"></i>
            <span class="pt-3 pl-3">kitwosditsupport@gmail.com </span>
            <br><br>
            <i class="fa-brands fa-facebook text-2xl"></i><span class="pl-3">Facebook</span><br><br>
            <i class="fa-brands fa-instagram text-2xl"></i><span class="pl-3">Instagram</span><br><br>
            <i class="fa-brands fa-twitter text-2xl"></i><span class="pl-3">Twitter</span><br><br>
            <i class="fa-brands fa-github text-2xl"></i><span class="pl-3">Github</span>





        </div>
    </div>
    <!-- maps -->
    <div class="map " style="width:100%;height:400px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.716384689804!2d85.334826573974!3d27.664245227393902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1987d4f504eb%3A0x3f4f8a4ebd8188e5!2sKitwosd%20IT%20Support%20Center!5e0!3m2!1sen!2snp!4v1690084545534!5m2!1sen!2snp"
            style="width:100%;height:400px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
