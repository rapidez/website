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
Route::view('showcases', 'showcases');
Route::get('blog/{slug}', function ($slug) {
    $file = File::glob(resource_path('views/content/blogs/*-'.$slug.'.md'))[0] ?? false;
    abort_unless($file, 404);
    $content = Str::markdown(file_get_contents($file));
    $title = Str::between($content, '<h1>', '</h1>');
    return view('blog', compact('title', 'content'));
});
Route::view('blog', 'blogs');
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
