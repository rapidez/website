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

Route::view('/', 'home');
Route::view('showcases', 'showcases');
Route::get('blog/{slug}', function ($slug) {
    return view('blog', ['slug' => $slug]);
});
Route::get('blog', function () {
    $blogs = Cache::remember('blogs', 86400, function () {
        return collect(File::files(resource_path('views/content/blogs')))
            ->map(
                fn($blog) => Str::of($blog->getFilename())
                    ->replace('.blade.php', '')
            );
    });

    return view('blogs', ['blogs' => $blogs]);
});
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
