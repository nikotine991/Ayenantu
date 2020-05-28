<?php



Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::resource('portfolio', 'ProjectController')->names('projects')->parameters(['portfolio' => 'project']);

// Route::resource('projects', 'ProjectController');

// Route::get('/portfolio','ProjectController@index')->name('projects.index');
// Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');

// Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');

// Route::post('/portfolio','ProjectController@store')->name('projects.store');
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

// Route::delete('/portfolio/{project}','ProjectController@destroy')->name('projects.destroy');

Route::view('/contact','contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

//Route::get('contactame', function () {
//    return view('contact');
//})->name('contactos');
//
//Route::get('/', function(){
//    return view('home');
//})->name('home');

