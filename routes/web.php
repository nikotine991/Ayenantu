<?php



Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::get('/portfolio','PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{$id}', 'PortfolioController@show')->name('portfolio.show');
Route::view('/contact','contact')->name('contact');

Route::post('contact', 'MessagesController@store');

//Route::get('contactame', function () {
//    return view('contact');
//})->name('contactos');
//
//Route::get('/', function(){
//    return view('home');
//})->name('home');

