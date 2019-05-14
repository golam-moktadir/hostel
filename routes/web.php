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
Route::get('/meal_calculate', 'Calculation_controller@index');
Route::get('/meal_calculate_form/{id}', 'Calculation_controller@meal_calculate_form');
Route::post('/meal_calculation_view', 'Calculation_controller@meal_calculation_view');
Route::get('/final_calculation', 'Calculation_controller@final_calculation');

Route::get('/shopping_entry', 'Shopping_controller@index');
Route::post('/shopping_insert', 'Shopping_controller@insert');
Route::get('/shopping_view', 'Shopping_controller@view');
Route::get('/edit_shopping/{id}', 'Shopping_controller@edit');
Route::post('/update_shopping', 'Shopping_controller@update');
Route::get('/delete_shopping/{id}', 'Shopping_controller@delete');

Route::get('/meal', 'Meal_controller@index');
Route::get('/meal_entry/{id}', 'Meal_controller@meal_entry');
Route::post('/meal_insert', 'Meal_controller@insert');
Route::get('/meal_fee/{id}', 'Meal_controller@meal_fee');
Route::post('/meal_fee_insert', 'Meal_controller@meal_fee_insert');
Route::get('/meal_view', 'Meal_controller@meal_view');
Route::get('/meal_fee_view', 'Meal_controller@meal_fee_view');
Route::get('/meal_entry_edit/{id}', 'Meal_controller@meal_entry_edit');
Route::post('/update_meal_entry', 'Meal_controller@update_meal_entry');
Route::get('/meal_fee_edit/{id}', 'Meal_controller@meal_fee_edit');
Route::post('/update_meal_fee', 'Meal_controller@update_meal_fee');
Route::get('/meal_fee_delete/{id}', 'Meal_controller@meal_fee_delete');
Route::get('/meal_entry_delete/{id}', 'Meal_controller@meal_entry_delete');

Route::get('/pay_fee/{id}', 'Rent_controller@pay_fee');
Route::post('/insert_rent', 'Rent_controller@insert');
Route::get('/rent', 'Rent_controller@view');
Route::get('/paid_rent', 'Rent_controller@paid_rent');
Route::get('/edit_rent/{id}', 'Rent_controller@edit');
Route::post('/update_rent', 'Rent_controller@update');
Route::get('/due_pay/{id}', 'Rent_controller@due_pay');
Route::get('/delete_paid_fee/{id}', 'Rent_controller@delete');
Route::post('/update_payment', 'Rent_controller@update_payment');

Route::get('/add_fee_schedule', 'Schedule_controller@index');
Route::post('/insert_fee_schedule', 'Schedule_controller@insert');
Route::get('/fee_schedule', 'Schedule_controller@view');
Route::get('/edit_fee_schedule/{id}', 'Schedule_controller@edit');
Route::post('/update_fee_schedule', 'Schedule_controller@update');
Route::get('/delete_fee_schedule/{id}', 'Schedule_controller@delete');

Route::get('/', 'Login_controller@index');
Route::post('/login_method', 'Login_controller@login_method');
Route::get('/logout_method', 'Login_controller@logout_method');
Route::get('/register_method', 'Login_controller@register_method');
Route::post('/register_data', 'Login_controller@register_data');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/add_student','AdminController@index');
Route::post('/insert_student','AdminController@insert_student');
Route::get('/student', 'AdminController@student');
Route::get('/student_profile/{id}', 'AdminController@student_details');
Route::get('/edit_student/{id}', 'AdminController@edit_student');
Route::get('/delete_student/{id}', 'AdminController@delete');
Route::post('update_student', 'AdminController@update_student');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
