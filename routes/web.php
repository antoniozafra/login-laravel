<?php


Route::view('/', 'login')->name('login');

Route::view('/reset', 'reset')->name('reset');
// Route::view('/reset', 'resources\views\auth\reset')->name('reset');
Route::view('/register', 'resources\views\auth\register')->name('register');
// Route::view('/show-users/','show-users')->name('show-users');
// Route::view('/contact', 'contact')->name('contact');
Route::view('/show-users/','show-users')->name('users.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>  