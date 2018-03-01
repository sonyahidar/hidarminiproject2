<?php

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

Route::get('/', 'PagesController@home') -> name('home');
Route::get('/about', 'PagesController@about') -> name('about');
Route::get('/contact', 'PagesController@contact') -> name('contact');
Route::get('/viewmessages', 'PagesController@viewmessages') -> name('viewmessages');
Route::get('/signup', 'PagesController@signup') -> name('signup');
Route::get('/login', 'PagesController@login') -> name('login');
Route::get('/messagebody', 'PagesController@messagebody') -> name('messagebody');
Route::post('/contact', 'PagesController@store') -> name('contact.store');
Route::get('/thanks/{name}', 'PagesController@thanks') -> name('thanks');

/*
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/messagebody', function () {
    return view('pages.messagebody');
});

Route::post('/contact', function () {

   $data = request()->all();
   echo 'Email: '. $data['email']. '<br>';
   echo 'Body: '. $data['body'];
});
*/