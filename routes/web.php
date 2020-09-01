<?php

//Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);
Route::get('/logout2', 'Auth\LoginController@logout')->name('customlogout');

Route::redirect('/home', 'admin');
Route::redirect('/', 'admin');
Route::get('categories/check_slug', 'CategoryController@check_slug')->name('categories.check_slug');
Route::get('categories/{slug}/{category}', 'CategoryController@show')->name('categories.show');
Route::get('tags/check_slug', 'TagController@check_slug')->name('tags.check_slug');
Route::get('tags/{slug}/{tag}', 'TagController@show')->name('tags.show');
Route::get('articles/check_slug', 'ArticleController@check_slug')->name('articles.check_slug');
Route::get('articles/{slug}/{article}', 'ArticleController@show')->name('articles.show');
Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('faq', 'FaqController@index')->name('faq.index');



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Tags
    Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    Route::resource('tags', 'TagsController');

    // Articles
    Route::delete('articles/destroy', 'ArticlesController@massDestroy')->name('articles.massDestroy');
    Route::resource('articles', 'ArticlesController');

    Route::resource('patients', 'PatientsController');
    Route::get('appointments', 'PatientsController@currentAppointments')->name('appointments');
    Route::get('historyappointments', 'PatientsController@historyAppointments')->name('history.appointments');
    Route::resource('cronjobs', 'CronJobController');

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Questions
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    Route::get('uploads/create', 'UploadsController@create')->name('previousuploads');
    Route::get('treatment-indicators', 'HomeController@treatmentIndicators')->name('treatmentindicators');    
    Route::post('uploads/image/upload', 'UploadsController@fileUpload')->name('create.uploads');
    Route::get('uploads/image/delete', 'UploadsController@removeUpload')->name('delete.uploads');
    Route::get('test', 'UploadsController@test')->name('test');
});
