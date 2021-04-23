<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::view('/', 'home');
Route::view('slack', 'slack');

Route::post('slack', function (Request $request) {
    Validator::make($request->all(), [
        'email' => 'required|email',
    ])->validate();

    $response = Http::withHeaders([
        'Content-type' => 'application/json; charset=utf-8'
    ])
    ->withToken(config('services.slack.token'))
    ->get('https://slack.com/api/users.admin.invite', [
        'email' => $request->email,
    ]);

    return redirect('/slack')->with('response', $response->json());
});
