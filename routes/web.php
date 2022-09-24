<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
});
// Route::get('/siswa', function () {
//     return view('/siswa');
// });
// Route::get('/blog', [PostController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::get('/siswa', [DashboardController::class, 'siswa'])->middleware('admin');
Route::get('/kelas', [DashboardController::class, 'kelas'])->middleware('admin');
Route::post('/addkelas', [DashboardController::class, 'addkelas'])->middleware('admin');
Route::post('/addsiswa', [DashboardController::class, 'addsiswa'])->middleware('admin');
Route::get('/payment', [DashboardController::class, 'payment'])->middleware('admin');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
