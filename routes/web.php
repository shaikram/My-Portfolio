<?php

use Illuminate\Support\Facades\Route;
// use App\Mail\WelcomeMail;
// use Illuminate\Support\Facades\Mail;


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
// Route::get('email', function(){
//   Mail::to('email@email.com')->send(new WelcomeMail());
//   return new WelcomeMail();
// });

Route::get('portfolio', 'App\Http\Controllers\portfolioController@list');
Route::get('/', 'App\Http\Controllers\portfolioController@home');
Route::post('ajax-request', 'App\Http\Controllers\AjaxController@postId');
Route::post('ajax-message', 'App\Http\Controllers\AjaxController@postMessage');
Route::post('ajax-reply', 'App\Http\Controllers\AjaxController@postReply');
Route::get('login', 'App\Http\Controllers\MainController@index');
Route::get('admin', 'App\Http\Controllers\MainController@succeslogin');
Route::post('checklogin', 'App\Http\Controllers\MainController@checkLogin');
Route::get('logout', 'App\Http\Controllers\MainController@logout');
// Route::get('/messages', 'App\Http\Controllers\MainController@messages');
Route::get('/messages/{id}/edit', 'App\Http\Controllers\MessageController@update');
Route::get('/portfolio', 'App\Http\Controllers\MainController@portfolio');
Route::resource('messages', 'App\Http\Controllers\MessageController');
Route::get('/inboxdiv', 'App\Http\Controllers\MessageController@showInbox');
Route::post('upload-portfolio', 'App\Http\Controllers\portfolioController@upload')->name('upload');
Route::get('/boot', function () {
    return view('bootstrap');
});
