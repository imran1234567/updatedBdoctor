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




/*Authentication Route*/
Route::get('auth/login', ['as'=>    'login','uses'=> 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);

/*Registration Route*/

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/*End Auth Route*/


/*Password Reset Route*/

Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

/*Password Reset Route End*/

/*Category Controller*/

Route::resource('categories', 'CategoryController',['except' => ['create']]);

/*End Category Controller*/


Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug', '[\w\d\-\_]+');

Route::get('blog-main', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('/', 'PagesController@getIndex');

Route::get('Philosophy', 'PagesController@getPhilosophy');

Route::get('Overview', 'PagesController@getOverview');

Route::get('Team', 'PagesController@getTeam');

Route::get('Who-We-Work-With', 'PagesController@getWhoWeWork');

Route::get('What-We-Do', 'PagesController@getWhatweDo');

Route::get('BD-Approch', 'PagesController@getBD');

Route::get('Transport&Logistics', 'PagesController@getTransport');

Route::get('Fashion', 'PagesController@getFashion');

Route::get('Agri&Food', 'PagesController@getAgri');

Route::get('Tourisam&Leisure', 'PagesController@getTourisam');

Route::get('Media&Entertainment', 'PagesController@getMedia');

Route::get('Others', 'PagesController@getOthers');

Route::get('Business-Health-Check', 'PagesController@getBHealth');

Route::get('Blog-Home', 'PagesController@getBlogs');

Route::get('Contact', 'PagesController@getContact');
Route::post('Contact', 'PagesController@postContact');

Route::get('About', 'PagesController@getAbout');

Route::get('Sitemap', 'PagesController@getSitemap');

Route::resource('posts', 'PostController');

//Comments

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


/*Business Health Check Controller*/
Route::resource('businesses', 'BusinessController');
/*Business health Chaeck*/

//end