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

Route::get('/', 'HomeController@index')->name('home');

Route::get('register/verify/{token}','Auth\RegisterController@verify');

Route::group(['middleware'=> ['web' , 'admin']] , function(){
# datatable ajax
    Route::get('/adminpanel/users/data' , ['as' => 'adminpanel.users.data' , 'uses' => 'UsersController@anyData']);

    Route::get('/adminpanel/roles/data' , ['as' => 'adminpanel.roles.data' , 'uses' => 'RoleController@anyData']);

    Route::get('/adminpanel/projects/data' , ['as' => 'adminpanel.projects.data' , 'uses' => 'ProjectController@anyData']);

    #main admin
    Route::get('/adminpanel', 'AdminController@index')->name('adminpanel');
    #users
    Route::resource('/adminpanel/users', 'UsersController');

    Route::post('/adminpanel/users/changepassword/', 'UsersController@passwordupdate');
    Route::get('/adminpanel/users/{id}/delete' , 'UsersController@destroy');

    #settings
    Route::get('/adminpanel/sitesetting' , 'SiteSettingsController@index');
    Route::post('/adminpanel/sitesetting' , 'SiteSettingsController@store');

    #roles

    Route::get('/adminpanel/roles',['as'=>'role.index','uses'=>'RoleController@index']);//,'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);

	Route::get('/adminpanel/roles/create',['as'=>'role.create','uses'=>'RoleController@create']);//,'middleware' => ['permission:role-create']

	Route::post('/adminpanel/roles/create',['as'=>'role.store','uses'=>'RoleController@store']);//,'middleware' => ['permission:role-create']]);


	Route::get('/adminpanel/roles/{id}/edit',['as'=>'role.edit','uses'=>'RoleController@edit']);//,'middleware' => ['permission:role-edit']]);

	Route::patch('/adminpanel/roles/{id}',['as'=>'role.update','uses'=>'RoleController@update']);//,'middleware' => ['permission:role-edit']]);

	Route::delete('/adminpanel/roles/{id}/delete',['as'=>'role.destroy','uses'=>'RoleController@destroy']);//,'middleware' => ['permission:role-delete']

#projects Routes



Route::get('/adminpanel/projects',['as'=>'project.index','uses'=>'ProjectController@index']);//,'middleware' => ['permission:project-list|project-create|project-edit|project-delete']]);

Route::get('/adminpanel/projects/create',['as'=>'project.create','uses'=>'ProjectController@create' ]);//,'middleware' => ['permission:project-create']]);

Route::post('/adminpanel/projects/create',['as'=>'project.store','uses'=>'ProjectController@store']);//,'middleware' => ['permission:role-create']


Route::get('/adminpanel/projects/{id}/edit',['as'=>'project.edit','uses'=>'ProjectController@edit']);//,'middleware' => ['permission:project-edit']]);

Route::patch('/adminpanel/projects/{id}',['as'=>'project.update','uses'=>'ProjectController@update']);//,'middleware' => ['permission:project-edit']

Route::delete('/adminpanel/projects/{id}/delete',['as'=>'project.destroy','uses'=>'ProjectController@destroy']);//,'middleware' => ['permission:project-delete']



#route compound

Route::get('/adminpanel/compounds',['as'=>'compound.index','uses'=>'CompoundController@index']);//,'middleware' => ['permission:compound-list|compound-create|compound-edit|compound-delete']]);

Route::get('/adminpanel/compounds/create',['as'=>'compound.create','uses'=>'CompoundController@create' ]);//,'middleware' => ['permission:compound-create']]);

Route::post('/adminpanel/compounds/create',['as'=>'compound.store','uses'=>'CompoundController@store']);//,'middleware' => ['permission:compound-create']


Route::get('/adminpanel/compounds/{id}/edit',['as'=>'compound.edit','uses'=>'CompoundController@edit']);//,'middleware' => ['permission:compound-edit']]);

Route::patch('/adminpanel/compounds/{id}',['as'=>'compound.update','uses'=>'CompoundController@update']);//,'middleware' => ['permission:compound-edit']

Route::delete('/adminpanel/compounds/{id}/delete',['as'=>'compound.destroy','uses'=>'CompoundController@destroy']);//,'middleware' => ['permission:compound-delete']

#route building

Route::get('/adminpanel/buildings',['as'=>'building.index','uses'=>'BuildingController@index']);//,'middleware' => ['permission:building-list|building-create|building-edit|building-delete']]);

Route::get('/adminpanel/buildings/create',['as'=>'building.create','uses'=>'BuildingController@create' ]);//,'middleware' => ['permission:building-create']]);

Route::post('/adminpanel/buildings/create',['as'=>'building.store','uses'=>'BuildingController@store']);//,'middleware' => ['permission:building-create']


Route::get('/adminpanel/buildings/{id}/edit',['as'=>'building.edit','uses'=>'BuildingController@edit']);//,'middleware' => ['permission:building-edit']]);

Route::patch('/adminpanel/buildings/{id}',['as'=>'building.update','uses'=>'BuildingController@update']);//,'middleware' => ['permission:building-edit']

Route::delete('/adminpanel/buildings/{id}/delete',['as'=>'building.destroy','uses'=>'BuildingController@destroy']);//,'middleware' => ['permission:building-delete']



#route compound

Route::get('/adminpanel/compounds',['as'=>'compound.index','uses'=>'CompoundController@index']);//,'middleware' => ['permission:compound-list|compound-create|compound-edit|compound-delete']]);

Route::get('/adminpanel/compounds/create',['as'=>'compound.create','uses'=>'CompoundController@create' ]);//,'middleware' => ['permission:compound-create']]);

Route::post('/adminpanel/compounds/create',['as'=>'compound.store','uses'=>'CompoundController@store']);//,'middleware' => ['permission:compound-create']


Route::get('/adminpanel/compounds/{id}/edit',['as'=>'compound.edit','uses'=>'CompoundController@edit']);//,'middleware' => ['permission:compound-edit']]);

Route::patch('/adminpanel/compounds/{id}',['as'=>'compound.update','uses'=>'CompoundController@update']);//,'middleware' => ['permission:compound-edit']

Route::delete('/adminpanel/compounds/{id}/delete',['as'=>'compound.destroy','uses'=>'CompoundController@destroy']);//,'middleware' => ['permission:compound-delete']

#route Unit

Route::get('/adminpanel/units',['as'=>'unit.index','uses'=>'UnitController@index']);//,'middleware' => ['permission:unit-list|unit-create|unit-edit|unit-delete']]);

Route::get('/adminpanel/units/create',['as'=>'unit.create','uses'=>'UnitController@create' ]);//,'middleware' => ['permission:unit-create']]);

Route::post('/adminpanel/units/create',['as'=>'unit.store','uses'=>'UnitController@store']);//,'middleware' => ['permission:unit-create']


Route::get('/adminpanel/units/{id}/edit',['as'=>'unit.edit','uses'=>'UnitController@edit']);//,'middleware' => ['permission:unit-edit']]);

Route::patch('/adminpanel/units/{id}',['as'=>'unit.update','uses'=>'UnitController@update']);//,'middleware' => ['permission:unit-edit']
Route::delete('/adminpanel/units/{id}/delete',['as'=>'unit.destroy','uses'=>'UnitController@destroy']);//,'middleware' => ['permission:unit-delete']


Route::get('/adminpanel/units/{image_id}/deleteimage', 'UnitController@deleteimage')->name('deleteimage');


#route  book

Route::get('/adminpanel/book',['as'=>'book.index','uses'=>'BookController@bookdetails']);//,'middleware' => ['permission:unit-list|unit-create|unit-edit|unit-delete']]);


#rout contact

Route::get('/adminpanel/contact',['as'=>'contact.index','uses'=>'ContactController@index']);//,'middleware' => ['permission:unit-list|unit-create|unit-edit|unit-delete']]);
Route::delete('/adminpanel/contact/{id}/delete',['as'=>'contact.destroy','uses'=>'ContactController@destroy']);//,'middleware' => ['permission:unit-delete']


});


#about

Route::get('/about', 'AboutController@index')->name('about');

#contact
Route::get('/contact', 'ContactController@create')->name('contact');

Route::post('contact',['as'=>'contact.store','uses'=>'ContactController@store']);//,'middleware' => ['permission:unit-create']




Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


Route::get('queries',['as'=>'queries.index','uses'=>'HomeController@search']);



#downmenu
Route::get('show/{project_name}','ProjectController@showDetailsPro')->name('show');


#profile
Route::get('/profile', 'ProfileController@index')->name('profile');




Route::get('showproject/{project_name}', 'ProjectController@showDetailsPro')->name('showproject');
Route::get('showcompound/{compound_name}', 'CompoundController@showDetailsCom')->name('showcompound');
Route::get('/showunits/{compound_name}/{building_number}/{unit_number}', 'UnitController@showDetailsUnit')->name('showunits');


#book unit
Route::get('book/{compound_name}/{building_number}/{unit_number}/{unit_id}','BookController@bookunit')->name('book');
Route::get('/profile', 'BookController@index')->name('profile');
Route::get('bookdelete/{book_id}', 'BookController@deletebook')->name('bookdelete');

