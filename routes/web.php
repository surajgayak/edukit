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

Route::get('/', function () {
    return view('welcome');
});
// Auth Routes (do not remove)
Auth::routes();

// Frontend routes
Route::get('/gallery', [App\Http\Controllers\FrontendController::class, 'gallery'])->name('gallery');
Route::get('/aboutus', [App\Http\Controllers\FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/classes', [App\Http\Controllers\FrontendController::class, 'classes'])->name('classes');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\NoticeController::class, 'blog'])->name('blog');
Route::get('/coursecontent', [App\Http\Controllers\FrontendController::class, 'coursecontent'])->name('coursecontent');
Route::get('/allcourse', [App\Http\Controllers\FrontendController::class, 'allcourse'])->name('allcourse');
Route::get('/sendenquiry', [App\Http\Controllers\FrontendController::class, 'sendenquiry'])->name('sendenquiry');
Route::get('/getadmission', [App\Http\Controllers\FrontendController::class, 'getadmission'])->name('getadmission');
Route::get('/placementpartner', [App\Http\Controllers\FrontendController::class, 'placementpartner'])->name('placementpartner');
Route::get('/successstories', [App\Http\Controllers\FrontendController::class, 'successstories'])->name('successstories');
Route::get('/blogdesc/{notice}', [App\Http\Controllers\NoticeController::class, 'blogdesc'])->name('blogdesc');




// Admin Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::get('/course-delete/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course-delete');
});
