<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KITWOSD CMS</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- datatable script and cnd -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    {{-- jquerry-min.js --}}
    <script src="{{ asset('js/jquerry-min.js') }}"></script>
    {{-- jquerry-datepicker.css --}}
    <link rel="stylesheet" href="{{ asset('css/jquerry-datepicker.css') }}">
    {{-- demos.css --}}
    <link rel="stylesheet" href="{{ asset('css/demos.css') }}">
    {{-- jquerry-3.6.0.js --}}
    <script src="{{ asset('js/jquerry-3.6.0.js') }}"></script>
    {{-- jquery-ui.js --}}
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <style>
        .custom-dropdown .dropdown-toggle::after {
            display: none;
        }
    </style>
    @yield('head')
</head>

<body>
    {{-- <body> --}}




    <!-- place navbar here -->


    <div class="sidebar open" style="overflow-y: scroll;">
        <div class="logo-details">
            <span class="mini_logo">KITWOSD CMS</span>
            <span class="big_logo">KITWOSD CMS</span>
            {{-- <span class="mini_logo"><img src="{{ asset('images/logo.png') }}" alt="Logo" height="55px"
                    width="60px" style="padding-top: 35%; align-items: center;"></span>
            <span class="big_logo" ><img src="{{ asset('images/logo.png') }}"
                    alt="Logo" style="padding-top: 2%; padding-left:20%;"></span> --}}
        </div>
        <ul class="nav-links">

            {{-- <li class="my-1 {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"> --}}
            <li class="my-1 ">
                <a href="{{ route('home') }}">
                    <div class="iocn-link">
                        <i class='mainI bi bi-grid-3x2-gap'></i>
                        <span class="link_name">Dashboard</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Dashboard</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            {{-- @if (Auth::user()->role->name == 'Finance')
                <div class="separator_text px-4 py-1 my-2 fw-semibold">General Tools</div>
            @endif --}}
            {{-- <li class="mt-2 {{ Route::currentRouteName() === 'add-invoice' ? 'active' : '' }}">
                <a href="{{ route('add-invoice') }}"> --}}
            <li class="mt-2 ">
                <a href="{{ route('team-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-people-fill'></i>
                        <span class="link_name"> Teams</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Teams</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('category-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-list-nested'></i>
                        <span class="link_name"> Category</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Category</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('download-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-download'></i>
                        <span class="link_name"> Downloads</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Downloads</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('media-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-play-btn'></i>
                        <span class="link_name"> Media</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Media</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('notice-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-easel2'></i>
                        <span class="link_name"> Notices</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Notices</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="#">

                    <div class="iocn-link">
                        <i class='mainI bi bi-file-earmark-ruled'></i>
                        <span class="link_name"> Reports</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Reports</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('role-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-person-lock'></i>
                        <span class="link_name"> Roles</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Roles</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('course-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-book'></i>
                        <span class="link_name">Courses</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Courses</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('syllabus-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-book'></i>
                        <span class="link_name">Syllabus</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Syllabus</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('upcommingclass-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-book'></i>
                        <span class="link_name">Upcoming Class</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Upcoming Class</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('alumni-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-book'></i>
                        <span class="link_name">Alumni</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Alumni</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('setting-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-book'></i>
                        <span class="link_name">Settings</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Settings</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('user-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-person-add'></i>
                        <span class="link_name">User</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">User</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>



        </ul>
    </div>





    <main class="home-section p-0 m-0" style="background-color: #fffbeb; overflow-x:hidden;">
        <!-- mini menu bar -->
        <div class="container-fluid d-flex justify-content-between py-1"
            style="background-color: #fff; box-shadow:1px 1px 1px 0px #c8c8c8;">
            <div class="home-content px-1">
                <i class='bx bx-menu'></i>
            </div>

            <div class="container-fluid d-flex justify-content-end mx-0 px-0">
                <div class="home-content">
                    <div class="dropdown custom-dropdown">
                        <button class="btn dropdown-toggle border-0" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false" style="-webkit-appearance: none;">
                            <div class="d-flex" style="border-radius:10px; box-shadow:1px 1px 2px #7a7a7a">
                                <i class='bx bxs-user-circle' style="font-size: 36px;"></i>
                                <i class='bx bx-caret-down' style="padding-top:10px; margin-left:-5px;"></i>
                            </div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            {{-- <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <!-- <i class='bx bx-bell' style="font-size: 24px;"></i> -->
                </div>
            </div>
        </div>
        @yield('content')
    </main>
    <footer class="bg-light text-right text-lg-start ">

        <!-- Copyright -->
        <!-- Copyright -->
    </footer>
    @yield('footer')
    <script src="../js/dashboard.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
