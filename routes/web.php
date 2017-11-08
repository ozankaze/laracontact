<?php

use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::resource('contact', 'ContactController', [
	'except' => ['create']
]);
Route::resource('hobby', 'HobbyController', [
	'except' => ['index', 'create', 'show']
]);
Route::get('api/contact', 'ContactController@apiContact')->name('api.contact');
Route::get('api/hobbies/{id}', 'ContactController@apiHobbiesContact')->name('api.hobbies.contact');

Route::get('/search', function (Request $request) {
   return $result = App\Contact::search($request->search)->get();
   return view('result', compact('result'));
});
