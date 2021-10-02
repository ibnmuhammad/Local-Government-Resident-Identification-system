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

Route::get('lgri', 'PDFController@index');
Route::post('lgri2', 'PDFController@pdf')->name('pdf.generate');

Route::get('/', function () {
    return view('auth.login');
});


// Auth::routes();

Auth::routes(['register' => false]);   //remove register option in the application + removing RegisterController in controller file

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin/dashboard', 'Admin\DashboardController@index') -> middleware('role:admin');
// Route::get('/user/dashboard', 'User\DashboardController@index') -> middleware('role:user');

Route::group(['prefix' => 'superadministrator', 'middleware' => ['auth','role:superadministrator']], function() {
    Route::get('/', 'SuperAdmin\DashboardController@index');
    Route::get('superadmin/showlg', 'SuperAdmin\DashboardController@showlg')->name('superadmin.showlg');
    Route::get('superadmin/LocalGovt/resident/{id}', 'SuperAdmin\DashboardController@mkazi')->name('superadmin.mkazi');
    Route::get('superadmin/LocalGovt/house/{id}', 'SuperAdmin\DashboardController@nyumba')->name('superadmin.nyumba');
    Route::get('superadmin/LocalGovt/balozi/{id}', 'SuperAdmin\DashboardController@balozi')->name('superadmin.balozi');
    Route::resource('superadmin', 'SuperAdmin\SuperAdminController');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:administrator']], function() {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/admin/profile', 'Admin\DashboardController@profile');
    Route::get('admin/showlg', 'Admin\DashboardController@showlg')->name('admin.showlg');
    Route::get('admin/editlogin/{id}', 'Admin\DashboardController@editlogin')->name('admin.editlogin');
    Route::post('/editlogin', 'Admin\DashboardController@updatelogin')->name('admin.updatelogin');
    Route::post('admin/district', 'Admin\DashboardController@showDistrict')->name('admin.district'); //Route for retrieving district as per selected region
    Route::get('admin/LocalGovt/resident/{id}', 'Admin\DashboardController@mkazi')->name('admin.mkazi');
    Route::get('admin/LocalGovt/house/{id}', 'Admin\DashboardController@nyumba')->name('admin.nyumba');
    Route::get('admin/LocalGovt/balozi/{id}', 'Admin\DashboardController@balozi')->name('admin.balozi');
    Route::resource('admin', 'Admin\AdminUserController');
    Route::resource('admin/profile', 'Admin\ProfileController');


});

Route::group(['prefix' => 'user', 'middleware' => ['auth','role:user']], function() {
    Route::get('/', 'User\DashboardController@index')->name('user.dashboard');
    Route::get('/profile', 'User\DashboardController@profile')->name('user.profile');
    Route::get('/editprofile/{LocalGovtID}', 'User\DashboardController@editprofile');
    Route::post('/profile', 'User\DashboardController@updateprofile');
    Route::get('/createprofile', 'User\DashboardController@create');
    Route::post('/createprofile', 'User\DashboardController@store')->name('details.store');
    Route::get('/editlogin/{user_id}', 'User\DashboardController@editlogin')->name('user.edit');
    Route::post('/editlogin', 'User\DashboardController@updatelogin')->name('user.update');
    Route::get('user/resident/verify', 'User\DashboardController@verifypage')->name('resident.verify');
    Route::get('user/resident/update', 'User\DashboardController@updateresident')->name('resident.updateresident');
    Route::get('/user/resident/update1', 'User\DashboardController@retrieveresident')->name('resident.retrieve');
    Route::post('/resident/shifting', 'User\DashboardController@shifting')->name('resident.shifting');
    // Route::post('user/resident/verify', 'User\DashboardController@verify')->name('resident.verify1');
    Route::resource('user/tencellleader', 'User\TenCellController');
    Route::resource('user/house', 'User\HouseController');
    Route::resource('user/resident', 'User\ResidentController');

});
