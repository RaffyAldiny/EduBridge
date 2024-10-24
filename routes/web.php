<?php

use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPreferenceController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/professormessage', function () {
    return view('professormessage');
});

Route::get('/studentpreference', function () {
    return view('studentpreference');
});

Route::get('/professormessage/{name}', function ($name) {
    // Use urldecode to reverse the URL encoding
    $decodedName = urldecode($name);
    // Handle the student name here
    return view('professormessage', ['name' => $decodedName]);
})->name('professormessage');

Route::get('/studentlist', [ProfessorController::class, 'showStudentList']);


Route::get('/studentpreference/{profession}', [StudentPreferenceController::class, 'showProfessionList']);
