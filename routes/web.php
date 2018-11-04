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
use App\Events\EventWasTriggered;

Route::get('/', function () {
    return view('controller');
});

Route::get('/a', function(){
  $size = request('size');
  $numbers = implode('', array_rand(range(0, 9), 5));


  event(new EventWasTriggered($size, $numbers));

  return $numbers;
});

// Route::get('/calibrate', function(){
//   $size = request('size');
//   event(new EventwasTriggered($size));
// });



Route::get('/b', function(){
  return view('patient');
});
