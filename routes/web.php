<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth Routes (do not remove)
Auth::routes();

// Frontend routes
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcomepage');
Route::get('/gallery', [App\Http\Controllers\FrontendController::class, 'gallery'])->name('gallery');
Route::get('/aboutus', [App\Http\Controllers\TeamController::class, 'aboutus'])->name('aboutus');
Route::get('/classes', [App\Http\Controllers\UpcommingclassController::class, 'classes'])->name('classes');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/blog', [App\Http\Controllers\NoticeController::class, 'blog'])->name('blog');
Route::get('/coursecontent/{course}', [App\Http\Controllers\CourseController::class, 'coursecontent'])->name('coursecontent');
// Route::post('/coursecontent', [App\Http\Controllers\CoursecontentController::class, 'coursecontent'])->name('coursecontent');
Route::get('/allcourse', [App\Http\Controllers\CourseController::class, 'showdata'])->name('allcourse');
Route::get('/sendenquiry', [App\Http\Controllers\SendenquiryController::class, 'index'])->name('sendenquiry');
Route::get('/sendcourseenquiry/{upcomming}', [App\Http\Controllers\SendenquiryController::class, 'sendcourseenquiry'])->name('sendcourseenquiry');
Route::post('/sendenquiry-store', [App\Http\Controllers\SendenquiryController::class, 'store'])->name('sendenquiry-store');
Route::get('/sendenquiry-store', [App\Http\Controllers\SendenquiryController::class, 'sendenq'])->name('sendenquiry-store');
Route::get('/getadmission', [App\Http\Controllers\GetadmissionController::class, 'welcpage'])->name('welcpage');
Route::get('/getadmission/{upcomming}', [App\Http\Controllers\GetadmissionController::class, 'getadmission'])->name('getadmission');
Route::post('/getadmission', [App\Http\Controllers\GetadmissionController::class, 'store'])->name('getadmissions');
Route::get('/paymentinfo', [App\Http\Controllers\FrontendController::class, 'paymentinfo'])->name('paymentinfo');
Route::get('/all-placementpartner', [App\Http\Controllers\FrontendController::class, 'placementpartner'])->name('all-placementpartner');
Route::get('/successstories', [App\Http\Controllers\FrontendController::class, 'successstories'])->name('successstories');
Route::get('/blogdesc/{notice}', [App\Http\Controllers\NoticeController::class, 'blogdesc'])->name('blogdesc');
Route::get('/paymentmethod/{getadmission}', [App\Http\Controllers\GetadmissionController::class, 'paymentmethod'])->name('paymentmethod');
Route::post('/payment-update/{getadmission}', [App\Http\Controllers\GetadmissionController::class, 'paymentUpdate'])->name('payment-update');
Route::get('/reviewdetails/{getadmission}', [App\Http\Controllers\GetadmissionController::class, 'review'])->name('reviewdetails');


// Admin Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'userIndex'])->name('home');

Route::group(["middleware" => "auth"], function () {
    // Routes for Teams
    Route::get('/team-create', [App\Http\Controllers\TeamController::class, 'create'])->name('team-create');
    Route::get('/team-index', [App\Http\Controllers\TeamController::class, 'index'])->name('team-index');
    Route::post('/team-store', [App\Http\Controllers\TeamController::class, 'store'])->name('team-store');
    Route::get('/team-edit/{team}', [App\Http\Controllers\TeamController::class, 'edit'])->name('team-edit');
    Route::post('/team-update/{team}', [App\Http\Controllers\TeamController::class, 'update'])->name('team-update');

    // Routes for Category
    Route::get('/category-create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category-create');
    Route::get('/category-index', [App\Http\Controllers\CategoryController::class, 'index'])->name('category-index');
    Route::post('/category-store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category-store');
    Route::get('/category-edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category-edit');
    Route::post('/category-update/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category-update');

    // Routes for Downloads
    Route::get('/download-create', [App\Http\Controllers\DownloadController::class, 'create'])->name('download-create');
    Route::get('/download-index', [App\Http\Controllers\DownloadController::class, 'index'])->name('download-index');
    Route::post('/download-store', [App\Http\Controllers\DownloadController::class, 'store'])->name('download-store');
    Route::get('/download-edit/{download}', [App\Http\Controllers\DownloadController::class, 'edit'])->name('download-edit');
    Route::post('/download-update/{download}', [App\Http\Controllers\DownloadController::class, 'update'])->name('download-update');

    // Routes for Media
    Route::get('/media-create', [App\Http\Controllers\MediaController::class, 'create'])->name('media-create');
    Route::get('/media-index', [App\Http\Controllers\MediaController::class, 'index'])->name('media-index');
    Route::post('/media-store', [App\Http\Controllers\MediaController::class, 'store'])->name('media-store');
    Route::get('/media-edit/{media}', [App\Http\Controllers\MediaController::class, 'edit'])->name('media-edit');
    Route::post('/media-update/{media}', [App\Http\Controllers\MediaController::class, 'update'])->name('media-update');
    Route::get('/media-delete/{media}', [App\Http\Controllers\MediaController::class, 'destroy'])->name('media-delete');

    // Routes for Notices
    Route::get('/notice-create', [App\Http\Controllers\NoticeController::class, 'create'])->name('notice-create');
    Route::get('/notice-index', [App\Http\Controllers\NoticeController::class, 'index'])->name('notice-index');
    Route::post('/notice-store', [App\Http\Controllers\NoticeController::class, 'store'])->name('notice-store');
    Route::get('/notice-edit/{notice}', [App\Http\Controllers\NoticeController::class, 'edit'])->name('notice-edit');
    Route::post('/notice-update/{notice}', [App\Http\Controllers\NoticeController::class, 'update'])->name('notice-update');
    Route::get('/notice-delete/{notice}', [App\Http\Controllers\NoticeController::class, 'destroy'])->name('notice-delete');


    // Routes for Roles
    Route::get('/role-create', [App\Http\Controllers\RoleController::class, 'create'])->name('role-create');
    Route::get('/role-index', [App\Http\Controllers\RoleController::class, 'index'])->name('role-index');
    Route::post('/role-store', [App\Http\Controllers\RoleController::class, 'store'])->name('role-store');
    Route::get('/role-edit/{role}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role-edit');
    Route::post('/role-update/{role}', [App\Http\Controllers\RoleController::class, 'update'])->name('role-update');

    // Routes for User
    Route::get('/user-create', [App\Http\Controllers\HomeController::class, 'userCreate'])->name('user-create');
    Route::get('/user-index', [App\Http\Controllers\HomeController::class, 'userIndex'])->name('user-index');
    Route::post('/user-store', [App\Http\Controllers\HomeController::class, 'userStore'])->name('user-store');
    Route::get('/user-edit/{user}', [App\Http\Controllers\HomeController::class, 'userEdit'])->name('user-edit');
    Route::post('/user-update/{user}', [App\Http\Controllers\HomeController::class, 'userUpdate'])->name('user-update');

    //Route for course
    Route::get('/course-create', [App\Http\Controllers\CourseController::class, 'courseCreate'])->name('course-create');
    Route::post('/course-store', [App\Http\Controllers\CourseController::class, 'courseStore'])->name('course-store');
    Route::get('/course-index', [App\Http\Controllers\CourseController::class, 'courseIndex'])->name('course-index');
    Route::get('/course-edit/{course}', [App\Http\Controllers\CourseController::class, 'courseEdit'])->name('course-edit');
    Route::post('/course-update/{course}', [App\Http\Controllers\CourseController::class, 'courseUpdate'])->name('course-update');
    Route::get('/course-delete/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course-delete');
    // Route::get('/course-delete/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course-delete');

    // Route for syllabus
    Route::get('/syllabus-create', [App\Http\Controllers\SyllabusController::class, 'create'])->name('syllabus-create');
    Route::post('/syllabus-store', [App\Http\Controllers\SyllabusController::class, 'store'])->name('syllabus-store');
    Route::get('/syllabus-index', [App\Http\Controllers\SyllabusController::class, 'index'])->name('syllabus-index');
    Route::get('/syllabus-edit/{syllabus}', [App\Http\Controllers\SyllabusController::class, 'edit'])->name('syllabus-edit');
    Route::post('/syllabus-update/{syllabus}', [App\Http\Controllers\SyllabusController::class, 'update'])->name('syllabus-update');
    Route::get('/syllabus-delete/{syllabus}', [App\Http\Controllers\SyllabusController::class, 'destroy'])->name('syllabus-delete');
    Route::get('/syllabus-add/{course}', [App\Http\Controllers\SyllabusController::class, 'add'])->name('syllabus-add');

    // Upcomming Classes
    Route::get('/upcommingclass-create', [App\Http\Controllers\UpcommingclassController::class, 'create'])->name('upcommingclass-create');
    Route::post('/upcommingclass-store', [App\Http\Controllers\UpcommingclassController::class, 'store'])->name('upcommingclass-store');
    Route::get('/upcommingclass-index', [App\Http\Controllers\UpcommingclassController::class, 'index'])->name('upcommingclass-index');
    Route::get('/upcommingclass-edit/{upcommingclass}', [App\Http\Controllers\UpcommingclassController::class, 'edit'])->name('upcommingclass-edit');
    Route::post('/upcommingclass-update/{upcommingclass}', [App\Http\Controllers\UpcommingclassController::class, 'update'])->name('upcommingclass-update');
    Route::get('/upcommingclass-delete/{upcommingclass}', [App\Http\Controllers\UpcommingclassController::class, 'destroy'])->name('upcommingclass-delete');

    // Settings
    Route::get('/setting-create', [App\Http\Controllers\SettingController::class, 'create'])->name('setting-create');
    Route::post('/setting-store', [App\Http\Controllers\SettingController::class, 'store'])->name('setting-store');
    Route::get('/setting-index', [App\Http\Controllers\SettingController::class, 'index'])->name('setting-index');
    Route::get('/setting-delete/{setting}', [App\Http\Controllers\SettingController::class, 'destroy'])->name('setting-delete');
    Route::post('/setting-update/{setting}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting-update');
    Route::get('/setting-edit/{setting}', [App\Http\Controllers\SettingController::class, 'edit'])->name('setting-edit');

    // Alumni
    Route::get('/alumni-create', [App\Http\Controllers\AlumniController::class, 'create'])->name('alumni-create');
    Route::post('/alumni-store', [App\Http\Controllers\AlumniController::class, 'store'])->name('alumni-store');
    Route::get('/alumni-index', [App\Http\Controllers\AlumniController::class, 'index'])->name('alumni-index');
    Route::get('/alumni-delete/{alumni}', [App\Http\Controllers\AlumniController::class, 'destroy'])->name('alumni-delete');
    Route::get('/alumni-edit/{alumni}', [App\Http\Controllers\AlumniController::class, 'edit'])->name('alumni-edit');
    Route::post('/alumni-update/{alumni}', [App\Http\Controllers\AlumniController::class, 'update'])->name('alumni-update');

    // Routes for Type
    Route::get('/type-create', [App\Http\Controllers\TypeController::class, 'create'])->name('type-create');
    Route::get('/type-index', [App\Http\Controllers\TypeController::class, 'index'])->name('type-index');
    Route::post('/type-store', [App\Http\Controllers\TypeController::class, 'store'])->name('type-store');
    Route::get('/type-edit/{type}', [App\Http\Controllers\TypeController::class, 'edit'])->name('type-edit');
    Route::post('/type-update/{type}', [App\Http\Controllers\TypeController::class, 'update'])->name('type-update');


    // Payment Method
    Route::get('/paymentmethod-create', [App\Http\Controllers\PaymentmethodController::class, 'create'])->name('paymentmethod-create');
    Route::post('/paymentmethod-store', [App\Http\Controllers\PaymentmethodController::class, 'store'])->name('paymentmethod-store');
    Route::get('/paymentmethod-index', [App\Http\Controllers\PaymentmethodController::class, 'index'])->name('paymentmethod-index');
    Route::get('/paymentmethod-edit/{paymentmethod}', [App\Http\Controllers\PaymentmethodController::class, 'edit'])->name('paymentmethod-edit');
    Route::get('/paymentmethod-delete/{paymentmethod}', [App\Http\Controllers\PaymentmethodController::class, 'destroy'])->name('paymentmethod-delete');
    Route::post('/paymentmethod-update/{paymentmethod}', [App\Http\Controllers\PaymentmethodController::class, 'update'])->name('paymentmethod-update');

    // Getadmission Index
    Route::get('/getadmission-index', [App\Http\Controllers\GetadmissionController::class, 'index'])->name('getadmission-index');
});
