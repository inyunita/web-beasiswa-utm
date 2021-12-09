<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\mahasiswacontroller;

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

Route::get('/listbea',[mahasiswacontroller::class, 'index']);
Route::get('/create', [mahasiswacontroller::class, 'create']);
Route::post('/store', [mahasiswacontroller::class, 'store']);
Route::get('/show/{id}',[mahasiswacontroller::class, 'show']);
Route::post('/update/{id}', [mahasiswacontroller::class, 'update']);

Route::get('/', function () {
    return view('index',[
        "title" => "Home"
    ]);
});

Route::get('/status', function () {
    return view('statusbeasiswa',[
        "title" => "Home"
    ]);
});

// Route::get('/listbea', function () {
//     return view('adminlistsiswa',[
//         "title" => "Admin"
//     ]);
// });
// Route::get('/viewsiswa', function () {
//     return view('adminviewsiswa',[
//         "title" => "Admin"
//     ]);
// });
// Route::get('/daftar', function () {
//     return view('daftarbeasiswa',[
//         "title" => "Pendaftaran"
//     ]);
// });
// Route::get('/status', function () {
//     return view('statusbeasiswa',[
//         "title" => "Admin"
//     ]);
// });


