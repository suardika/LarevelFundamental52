<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('foo', 'FooController@foo');

//interface BarInterface {}
//class Bar implements BarInterface{}
//app()->bind('BarInterface', 'Bar');
//
//Route::get('bar', function () {
//    $bar = app('BarInterface');
//    dd($bar);
//});

//interface BarInterface {}
//class Bar implements BarInterface{}
//app()->bind('BarInterface', 'Bar');
//
//Route::get('bar', function () {
//    $bar = app()['BarInterface'];
//    dd($bar);
//});

//interface BarInterface {}
//class Bar implements BarInterface{}
//app()->bind('BarInterface', 'Bar');
//
//Route::get('bar', function () {
//    $bar = app()->make('BarInterface');
//    dd($bar);
//});

//interface BarInterface {}
//class Bar implements BarInterface{}
//App::bind('BarInterface', 'Bar');
//
//Route::get('bar', function () {
//    $bar = App::make('BarInterface');
//    dd($bar);
//});

//interface BarInterface {}
//class secondBar implements BarInterface{}
//App::bind('BarInterface', 'SecondBar');
//
//Route::get('bar', function (BarInterface $bar) {
//    dd($bar);
//});

//interface BarInterface {}
//class Bar implements BarInterface{}
//App::bind('BarInterface', 'Bar');
//
//Route::get('bar', function (BarInterface $bar) {
//    dd($bar);
//});

//interface BarInterface {}
//class Bar implements BarInterface{}
//App::bind('BarInterface', function(){
//    return new Bar;
//});
//
//Route::get('bar', function (BarInterface $bar) {
//    dd($bar);
//});


//class Baz {}
//class Bar{
//
//    public $baz;
//
//    public function __construct(Baz $baz)
//    {
//        $this->baz = $baz;
//    }
//}
//
////App::bind('Bar', function(){
//////    dd('fetching');
////    return new Bar(new Baz);
////});
//
//Route::get('bar', function (Bar $bar) {
//    dd($bar->baz);
//});

// Route::get('foo', function () {
//     return 'bar';
// });

//Route::get('/', 'WelcomeController@index');
//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit', 'ArticlesController@edit');
//Route::patch('articles/{article}', 'ArticlesController@update');
//Route::delete('articles/{article}', 'ArticlesController@destroy');


//Route::group(['middleware' => ['web']], function(){
//
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PagesController@about')->middleware('auth');
Route::get('contact', 'PagesController@contact');
Route::resource('articles', 'ArticlesController');

Route::auth();

Route::get('/home', 'HomeController@index');

// Route::get('foo', function () {
//     return 'this page may only be viewed by managers';
// })->middleware('manager');





