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
use App\Post;

Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', function(){
    $posts = Post::All();
    return view('welcome')->with('posts', $posts);
});

Route::get('posts', 'PostController@viewAllPosts');
Route::get('add_post', 'PostController@showPostForm')->middleware('auth');
Route::get('add_post_category', 'PostController@showPostCategoryForm')->middleware('auth');
Route::get('categories', 'PostController@showAllCategories');
Route::get('category/{id}', 'PostController@getCategoryId');
Route::get('post/{id}', 'PostController@getPostById');
Route::get('edit/post/{id}', 'PostController@editPostForm')->middleware('auth');
Route::get('edit/category/{id}', 'PostController@editCategoryForm')->middleware('auth');

Route::post('insert/post', 'PostController@createPost')->middleware('auth');
Route::post('insert/category', 'PostController@createPostCategory')->middleware('auth');
Route::patch('update/post/{id}', 'PostController@updatePost')->middleware('auth');
Route::delete('delete/post/{id}', 'PostController@deletePost')->middleware('auth');

