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


//Route::get('/', 'WelcomeController@index');

//Routes for email
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contacto', ['as' => 'contact', 'uses' => 'MailController@index'] );


//Routes for Dashboard
Route::get('home', 'HomeController@index');

Route::post('home/add_curso','HomeController@addCourse');
Route::post('home/update_curso','HomeController@updateCourse');
Route::post('home/update','HomeController@updateCourseView');
Route::post('home/delete_curso','HomeController@deleteCourse');

Route::post('home/add_post','HomeController@addPost');
Route::post('home/delete_post','HomeController@deletePost');
Route::post('home/update2','HomeController@updatePostView');
Route::post('home/update_post','HomeController@updatePost');
Route::get('ajax/delete','HomeController@deletePreinscription');

//Routes for Authentication Controller
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Routes for web site
Route::get('/','PageController@index');
Route::get('posts/{id}','PageController@posts');
Route::get('post','PageController@newsView');
Route::get('mapa','PageController@mapView');
Route::get('cursos','PageController@coursesView');
Route::get('cursos/{id}','PageController@courseDescription');
Route::get('fotos','PageController@photosView');
Route::get('informacion','PageController@informationView');
Route::get('preinscripcion','PageController@preinscripcionView');
Route::get('practicas','PageController@practicesServicesView');

Route::post('guardar_preinscripcion','PageController@savePreinscription');

Route::post('foto/guardar','FotografiaController@storePhoto');
Route::post('foto/eliminar','FotografiaController@destroyPhoto');



?>