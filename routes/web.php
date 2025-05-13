<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
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

Route::redirect('slack', 'https://join.slack.com/t/rapidez/shared_invite/zt-35gbinhoi-1KcVac_1mYRprZlQPbRJsg');

/*

After 4 years we're getting a `invite_limit_reached`, after reauthenticating the app
we get `missing_scope` with `needed`: `client` but that's deprecated. Just `admin`
doesn't work and with `admin.users:write` we get this when reinstalling the app:
`Apps with this feature are only available to Enterprise customers.`

But... it seems like there is an option with infinite invite links now!

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
*/
