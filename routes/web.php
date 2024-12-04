<?php

use App\Http\Controllers\ADMIN\AuthController;
use App\Http\Controllers\ADMIN\FacultyController;
use App\Livewire\pages\Home;
use App\Livewire\pages\About;
use App\Livewire\Pages\Application;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\WeBelieve;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('about', About::class)->name('about');
Route::get('we-believe', WeBelieve::class)->name('we-believe');
Route::get('contact', Contact::class)->name('contact');
Route::get('application', Application::class)->name('application');

Route::group(['prefix' => 'admin'], function () {

    Route::get('', function () {
            return view('ADMIN/Pages/Home');
        })->name('admin');

        Route::match(["GET", "POST"], "login",[AuthController::class, "login"])->name("admin.login");   
        Route::get('',[AuthController::class, 'admin'])->name('admin');
        Route::get('logout',[AuthController::class, 'logout'])->name('logout');

        Route::get('/faculty/', [FacultyController::class, 'index'])->name('admin.faculty');

        Route::group(['prefix' => '/faculty'], function () {
            Route::get('/create', [FacultyController::class, 'create'])->name('faculty.create');
            Route::post('/add', [FacultyController::class, 'store'])->name('faculty.store');
            Route::get('/edit/{id}', [FacultyController::class, 'edit'])->name('faculty.edit');
            Route::post('/update/{id}', [FacultyController::class, 'update'])->name('faculty.update');
            Route::post('/delete', [FacultyController::class, 'destroy'])->name('faculty.delete');
        });
        
    });
    
    Route::match(["GET", "POST"], "admin/register",[AuthController::class, "register"])->name("admin.register");

    