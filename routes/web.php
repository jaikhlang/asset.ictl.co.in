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
//Contact
Route::get('/events-asset-conference-contact', 'PageController@contact')->name('abouts.contact');
//About
Route::get('/events-about-conference-venue', 'PageController@knowAbout')->name('abouts.about');
//About
Route::get('/events-asset-conference-sponsor', 'PageController@sponsor')->name('events.sponsor');

Route::prefix('participation')->group(function(){
  //Registration Page
  Route::get('/event-asset-registration', 'PageController@registration')->name('events.registration');
  //Registration Form Submit
  Route::post('/event-asset-registration', 'RegistrationController@registerSubmit')->name('registrations.participant');
  //Instamojo Billing Prepare
  Route::get('/event-payment-billing', 'PaymentController@billingInfo')->name('payments.billing')->middleware('role:participant');
  //Instamojo Payment Parameters
  Route::post('/event-payment-billing', 'PaymentController@payNow')->name('payments.pay');
});
Route::get('indipay/response','PaymentController@response')->name('payments.response');
//Webhook
Route::get('registration-payment/response/webhook', 'PaymentController@webhook')->name('webhook');
Route::get('successfully-registered/{id}','RegistrationController@success')->name('registration.success');
Route::get('registered-payment-invoice', 'PaymentController@printInvoice')->name('print.invoice');
Route::get('registered-application-show', 'PaymentController@printApplication')->name('print.application');

//Auth Home
Route::get('/home', 'HomeController@index')->name('home');
