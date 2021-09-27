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



//page erreur 404
Route::fallback(function (){
    return view('404');
});

Route::redirect('/','en');

Route::post('/lang','LangController@langroute')->name('langchange');


//Mes route en francais
Route::group(['prefix'=>'fr'],function () {

    Route::get('/', function () {

        return view('home.home');
    })->name('home.fr');

    Route::get('/about', function () {
        return view('home.about');
    })->name('about.fr');

    Route::get('/services', function () {
        return view('home.services');
    })->name('services.fr');

    Route::get('/project', function () {
        return view('home.projects');
    })->name('projects.fr');

    Route::get('/blog', function () {
        return view('home.blog');
    })->name('blog.fr');

    Route::get('/contact', function () {
        return view('home.contact');
    })->name('contact.fr');

});

Route::get('/login',function(){
    echo 'login page';
})->name('loginpage');



Route::get('/admin','DashpageController@index')->name('adminpage');




//Mes routes en Anglais
Route::group(['prefix'=>'en'],function () {

    Route::get('/', function () {
        return view('home.home');
    })->name('home.en');

    Route::get('/about', function () {
        return view('home.about');
    })->name('about.en');

    Route::get('/services', function () {
        return view('home.services');
    })->name('services.en');

    Route::get('/project', function () {
        return view('home.projects');
    })->name('projects.en');

    Route::get('/blog', function () {
        return view('home.blog');
    })->name('blog.en');

    Route::get('/contact', function () {
        return view('home.contact');
    })->name('contact.en');

});
