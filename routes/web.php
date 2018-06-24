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

Route::get('/', 'FrontController@index')->name('index');



Route::post('find-car', 'FrontController@store')->name('find-car.store');

Route::resource('inventory','InventoryController');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('admin')->group(function() {
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'Auth\CarsController@index')->name('admin.dashboard');
Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

 // Password reset routes
// Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
// Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
// Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
// Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});


Route::resource('car','Auth\CarsController');
Route::resource('bodystyle','Auth\BodyStyleController', ['except' => ['create']]);
Route::resource('condition','Auth\ConditionController', ['except' => ['create']]);
Route::resource('country','Auth\CountryController', ['except' => ['create']]);
Route::resource('door','Auth\DoorsController', ['except' => ['create']]);
Route::resource('drivetrain','Auth\DrivetrainController', ['except' => ['create']]);
Route::resource('fueltype','Auth\FuelTypeController', ['except' => ['create']]);
Route::resource('passenger','Auth\PassengerController', ['except' => ['create']]);
Route::resource('promophrase','Auth\PromoPhraseController', ['except' => ['create']]);
Route::resource('specialoffer','Auth\SpecialOfferController', ['except' => ['create']]);
Route::resource('status','Auth\StatusController', ['except' => ['create']]);
Route::resource('transmission','Auth\TransmissionController', ['except' => ['create']]);
Route::resource('year','Auth\YearController', ['except' => ['create']]);
Route::resource('slide','Auth\SlidesController', ['except' => ['create']]);
Route::resource('address','AddressController');

Route::resource('order','Auth\OrderController');
Route::resource('setting','Auth\SettingController');
Route::resource('/cart','CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('inventory', 'FrontController@inventory');
Route::get('team', 'FrontController@team');
Route::get('contact', 'FrontController@contact');


Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');

//Paystack Functions
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

