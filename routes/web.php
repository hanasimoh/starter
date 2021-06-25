<?php




Route::get('/', function () {
    $data=[];
    $data['id']=5;
    $data['name']= 'hanane';
    return view('welcome', $data);


});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function(){
     return 'dashboard';
});
Route::get('fillable','OfferController@GetOffer' );

Route::group(
    [
        'prefix'=>LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::group(['prefix'=> 'offers'], function(){
   // Route::get('store', 'OfferController@store');

    Route::get('create','OfferController@create');

    Route::post('store', 'OfferController@store')-> name('offers.store');

    Route::get('all','OfferController@getAlloffers');
});
});



