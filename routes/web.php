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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin/login', function () {
    return view('admin.login.login');
});
Route::get('dashbord', function () {
    return view('admin.master');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('roles',function(){

//     $user_role = User::findorfail(1);
//     echo "<pre>"; print_r($user_role->role['name']); echo "</pre>";
//     exit();
// });
Route::post('Log_in','AdminUsersController@LogIn');
Route::get('logout','AdminUsersController@LogOut');
Route::resource('admin/users','AdminUsersController');
// Route::get('users','AdminUsersController@ShowUsers');
