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

// Static Route

Route::get('/','ThemeController@home_page');


// Daynamic Route

// Route::get('/user/{name}',function ($name){
//     echo $name;
// })->where('name','[A-Za-z]+'); 


// Route::get('/user/{id}',function ($id){
//     echo $id;
// })->where('id','[0-9]+');

// Route::get('/user/student/course/attend/register',function (){
//     echo 'welcome user regsiteration';
// })->name('students');


// Route::prefix('dashboard')->middleware('auth')->group(function (){

//     Route::get('/main',function (){
//         echo 'welcome admin';
//     });

// });