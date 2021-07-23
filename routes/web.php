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
    return view('welcome');
});
Route::get('/buying-guide', function () {
    return view('frontend/buying-guide');
})->name('buying-guide');

Route::get('/submit-wallet', function () {
    return view('frontend/submit-wallet');
})->name('submit-wallet');

Route::get('/exchange-wallet', function () {
    return view('frontend/exchange-wallet');
})->name('exchange-wallet');


Route::get('/team', function () {
    return view('frontend/team');
})->name('team');
Route::get('/account-creation', function () {
    return view('frontend/account-creation');
})->name('account-creation');

Route::get('/governance', function () {
    return view('frontend/governance');
})->name('governance');
Route::get('/tokenized-asset', function () {
    return view('frontend/tokenized-asset');
})->name('tokenized-asset');
Route::get('/get-started','FrontendController@getstarted')->name('get-started');
Route::get('/welcome','FrontendController@welcome')->name('welcome');
Route::get('/payments','FrontendController@payments')->name('payments');
Route::get('/contact','FrontendController@contactUs')->name('contact');
Route::get('/work','FrontendController@work')->name('work');

Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/blog-details/{blog}/', 'FrontendController@blogDetails')->name('blog.details');

Route::get('/dashboard',function(){
	return view('backend/dashboard');
})->name('dashboard');
Route::resource('/wallets','WalletController');
Route::resource('/exchanges','ExchangeController');
Route::resource('/class-signups','ClassSignupController');
Route::resource('/newsletters','NewsletterController');
Route::resource('/teams','TeamController');
Route::resource('/partners','PartnerController');
Route::resource('/investors','InvestorsController');
Route::resource('/blogs','BlogController');
Route::resource('/careers','CareerController');
Route::resource('/councilcontacts','CouncilcontactController');
Auth::routes();

Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/videos','VideoController');
Route::resource('/products','ProductController');
Route::resource('/contacts','ContactController');
Route::resource('/uploads','UploadController');
Route::get('/shop', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart');

Route::get('/checkout','CheckoutController@index')->name('checkout');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::get('/upload', 'FileUploadController@showUploadForm');
Route::post('/upload', 'FileUploadController@storeUploads');