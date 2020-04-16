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


use Illuminate\Support\Facades\Route;
//use Symfony\Component\Routing\Route;

//Route::get('/about', function () {
//    return view('about');
//});
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/first', function () {
//    return view('first');
//});
//Route::get('/second', function () {
//    return view('second');
//});
//Route::get('/third', function () {
//    return view('third');
//});
//Route::get('/profile', function () {
//    return view('profile');
//});
//Route::get('/extension2', function () {
//    return view('extension2');
//});
//Route::get('/xyz', function () {
//    return view('xyz');
//});
//Route::get('/directions', function () {
//    $directions = ['north' , 'south' , 'east ', 'west'];
//
//    return view('directions' , ['dir' => $directions]);
//});
////Route::get('/','FakeController');
//Route::get('/','FakeController@foo');


//Route::get('/about', function () {
//return view(about);
//
//});
//Route::get('/','EmailController@sendEmail');
//Route::get('/', function () {
//    return 'yolo';
//});
Route::get('/events', 'EventsController@index');
