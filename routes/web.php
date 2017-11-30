<?php

//Basic Auth
Auth::routes();

//Homepage
Route::get('/', 'PageController@index')->name('pages.index');
//Call For Paper
Route::get('/asset-call-for-paper', 'PageController@paper')->name('pages.paper');
//Organising Committee
Route::get('/events-asset-organising-committee', 'PageController@committee')->name('events.committee');
//About Asset 18
Route::get('/know-more-about-conference-asset', 'PageController@knowAsset')->name('abouts.asset');
//About
Route::get('/events-about-conference-venue', 'PageController@knowAbout')->name('abouts.about');

Route::prefix('participation')->group(function(){
  //Registration Page
  Route::get('/event-asset-registration', 'PageController@registration')->name('events.registration');
  //Registration Form Submit
  Route::post('/event-asset-registration', 'RegistrationController@registerSubmit')->name('registrations.participant');
  //Instamojo Billing
  Route::get('/event-payment-billing', 'PaymentController@billingInfo')->name('payments.billing');
});

//Auth Home
Route::get('/home', 'HomeController@index')->name('home');
