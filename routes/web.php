<?php

use Illuminate\Support\Facades\Route;

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

 
Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');
Route::post('/','ContactController@sendMessage')->name('contact.send'); 


Route::get('/confirm-membership','CustomAuthController@confirm')->name('confirm.membership');
Route::get('/member/register','CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('/member/register','CustomAuthController@register');
Route::get('/member/login','CustomAuthController@showLoginForm')->name('custom.login');
Route::post('/member/login','CustomAuthController@login');
Route::get('/member/logout','CustomAuthController@logout');

Route::get('/guest/register','GuestAuthController@showRegisterForm')->name('custom.register2');
Route::post('/guest/register','GuestAuthController@register');
Route::get('/guest/login','GuestAuthController@showLoginForm')->name('custom.login2');
Route::post('/guest/login','GuestAuthController@login'); 
Route::get('/guest/logout','GuestAuthController@logout');


 Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function(){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('member', 'MemberController'); 
    Route::resource('guest', 'GuestController'); 
    Route::resource('priest', 'PriestController'); 
    Route::resource('service', 'ServiceController'); 
    Route::resource('church_group', 'ChurchGroupController'); 
    Route::resource('cma_member', 'CMAMemberController'); 
    Route::resource('cwa_member', 'CWAMemberController'); 
    Route::get('reservation','ReservationController@index')->name('reservation.index');
    Route::post('reservation/{reservation_id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{reservation_id}','ReservationController@destroy')->name('reservation.destroy');
    Route::get('guestreservation','GuestReservationController@index')->name('guestreservation.index');
    Route::post('guestreservation/{reserve_id}','GuestReservationController@status')->name('guestreservation.status');
    Route::delete('guestreservation/{reserve_id}','GuestReservationController@destroy')->name('guestreservation.destroy');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});

Route::post('/reservations', 'ReservationsController@index');      
Route::post('/reservations', 'ReservationsController@store');     
Route::get('/reservations', 'ReservationsController@create')->name('reservation.create');   
Route::get('/reservations', 'ReservationsController@create');
Route::post('/reservations', 'ReservationsController@store');

Route::post('/guestreservations', 'GuestReservationsController@index');      
Route::post('/guestreservations', 'GuestReservationsController@store');     
Route::get('/guestreservations', 'GuestReservationsController@create')->name('reservation.create');   
Route::get('/guestreservations', 'GuestReservationsController@create');
Route::post('/guestreservations', 'GuestReservationsController@store');



Route::resource('customsearch','CustomSearchController');