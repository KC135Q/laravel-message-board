<?php
use App\Message;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/board', function () {
    return redirect('/list');
});

Route::get('/list', 'MessageController@messageList');

Route::get('/message/{messages}/edit', function (App\Message $messages) {
    return view('board.edit', ['message' => $messages]);
});

Route::get('/message/{messages}/delete', 'MessageController@deleteMessage');

Route::post('/message/add', 'MessageController@addMessage');