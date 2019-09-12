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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
    return 'Only Verified users can access the page';
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('survey', 'SurveyController');

Route::resource('questions', 'QuestionController');

Route::resource('answer', 'AnswerController');

Route::resource('roles', 'RolesController');

Route::resource('result', 'ResultController');

Route::get('resultall/{result}', 'ResultController@showall');



