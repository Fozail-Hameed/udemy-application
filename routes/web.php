<?php
use App\User;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('roles',function(){

//     $user_role = User::findorfail(1);
//     echo "<pre>"; print_r($user_role->role['name']); echo "</pre>";
//     exit();
// });

Route::resource('admin/users','AdminUsersController');