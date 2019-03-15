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

Route::group(['prefix' => 'v1.0'], function () {
    Route::get('/', function () {
        return response()->json(['message' => 'API Laravel', 'status' => 'Connected!!']);
    });
    
    Route::group(['middleware' => ['jwt.verify']], function () {
        Route::post('refresh', 'AuthController@refresh');
        Route::get('me', 'AuthController@me');
        Route::get('open', 'AuthController@open');
        
        Route::get('/users/page', 'UsersController@get_user_pagination');
        Route::get('/users/{id}/tratamentos', 'TratamentoController@get_user_list');
        Route::resource('users', 'UsersController');
        
        Route::get('/dashboard', 'DashboardController@index');
        // Route::resource('paciente', 'PacienteController');
        // Route::resource('users/{user}/tratamento', 'TratamentoController');
    });

    
    Route::post('login', 'AuthController@login')->name('login');
    Route::get('logout', 'AuthController@logout');
});

Route::get('/', function () {
    return redirect('v1.0');
});

Route::get('teste', function(Request $request, Response $response){
    echo App\User::count();
});