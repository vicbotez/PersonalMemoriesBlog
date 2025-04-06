<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

### global pages
Route::namespace('App\Http\Controllers\Main')->group(function(){

  Route::get('/', 'IndexController')->name('main.index');

  Route::prefix('posts')->namespace('Post')->group(function(){
    Route::get('/', 'IndexController')->name('main.post.index');
    Route::get('/{post}', 'ShowController')->name('main.post.show');
    Route::get('/tag/{tag}', 'TagController')->name('main.post.tag');
  });


});


Auth::routes();

### Admin area
Route::middleware(['auth','admin'])->prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function(){

  Route::namespace('Main')->group(function(){
    Route::get('/', 'IndexController');
    Route::get('/dashboard', 'IndexController')->name('dashboard');
  });

  Route::prefix('posts')->namespace('Post')->group(function(){
    Route::get('/', 'IndexController')->name('admin.post.index');
    Route::get('/tag/{tag}', 'TagController')->name('admin.post.tag');
    Route::get('/create', 'CreateController')->name('admin.post.create');
    Route::post('/create', 'StoreController')->name('admin.post.store');
    Route::get('/{post}', 'ShowController')->name('admin.post.show');
    Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
    Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
    Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
  });

  Route::prefix('tags')->namespace('Tag')->group(function(){
    Route::get('/', 'IndexController')->name('admin.tag.index');
    Route::get('/create', 'CreateController')->name('admin.tag.create');
    Route::post('/create', 'StoreController')->name('admin.tag.store');
    Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
    Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
    Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
    Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
  });

  Route::prefix('users')->namespace('User')->group(function(){
    Route::get('/', 'IndexController')->name('admin.user.index');
    Route::get('/create', 'CreateController')->name('admin.user.create');
    Route::post('/create', 'StoreController')->name('admin.user.store');
    Route::get('/{user}', 'ShowController')->name('admin.user.show');
    Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
    Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
    Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
  });

  Route::prefix('config')->namespace('Config')->group(function(){
    Route::get('/', 'IndexController')->name('admin.config.index');
    Route::patch('/update', 'UpdateController')->name('admin.config.update');
  });

});



