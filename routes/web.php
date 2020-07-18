<?php
Route::get('/', function () {
    return view('homepage');
})->name('home');
Route::get('/about', function () {
    return view('aboutpage');
})->name('about');
Route::get('/contact', function () {
    return view('contactpage');
})->name('contact');
Route::get('/contact/all/{id}','ContactController@OneMessage')->name('contact-message');

Route::get('/contact/all/{id}/update','ContactController@updateMessage')->name('contact-update');

Route::post('/contact/all/{id}/update','ContactController@UpdateMessageSubmit')->name('contact-update-submit');

Route::get('/contact/all/{id}/delete','ContactController@deleteMessage')->name('contact-delete');

Route::post('/contact/all/{id}/delete','ContactController@deleteMessageSubmit')->name('contact-delete-submit');

Route::get('/contact/all','ContactController@allData')->name('contact-data');

Route::post('/contact/submit','ContactController@submit')->name('contact-form');
