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

Route::get('/', function () {
    return view('home');
});

Route::get('/todo/simple', ['as' => 'todo.simple', function () {
    return view('samples/todo-simple');
}]);

Route::get('/poll/component', ['as' => 'poll.component', function () {
    return view('samples/poll-component');
}]);

Route::get('/invoice', ['as' => 'invoice', function () {
    return view('samples/invoice');
}]);

Route::get('/client', ['as' => 'client', function () {
    return view('samples/client');
}]);

Route::get('/clientalt', ['as' => 'clientalt', function () {
    return view('samples/clientalt');
}]);

Route::get('/invoice/sample', function () {
    return 'I am a test ajax sample using vue-resource ...';
});
