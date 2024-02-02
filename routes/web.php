<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
dfgdfgfd
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home',[ExerciceController::class, 'index']); 
Route::get('/experience',[ExerciceController::class, 'experience']); 
Route::get('/education',[ExerciceController::class, 'education']);
Route::get('/skills',[ExerciceController::class, 'skills']);
Route::get('/interests',[ExerciceController::class, 'interests']);
Route::get('/contact',[ExerciceController::class, 'contact']);

Route::post('/contact',[ExerciceController::class, 'contactForm']); // pour les post dans contact form