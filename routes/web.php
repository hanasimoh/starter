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
