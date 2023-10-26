<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get($uri, $callback); //untuk mengambil data
// Route::post($uri, $callback); // untuk mengirim data
// Route::put($uri, $callback); // untuk meng update data full
// Route::patch($uri, $callback); // update data sebagain atau tertentu
// Route::delete($uri, $callback); // hapus
// Route::options($uri, $callback);

Route::get('/', function () {
    return view('welcome');
});

// Route::view('guru/admin/tes/get', 'testView')->name('admin.satu');
// Route::view('guru/admin/tes/update', 'testView')->name('admin.dua');
// Route::view('guru/admin/tes/delete', 'testView')->name('admin.tiga');

// Route::prefix('admin')->group(function () {
//     Route::view('/tes', 'testView');
//     Route::view('/update', 'testView');
//     Route::view('/delete', 'testView');
// });

// Route::group(['prefix'=>'guru/admin/tes', 'as'=>'admin.'], function(){
//     Route::view('/get', 'testView')->name('satu');
//     Route::view('/update', 'welcome')->name('dua');
//     Route::view('/delete', 'testView')->name('tiga');
// });

Route::redirect('/test2', '/tes', 301);

// Route::get('/users/{nama}', function ($nama) {
//     return "nama saya {$nama}";
// });

// Route::get('/user/{name}', function($name) {
//  return 'Hai '.$name.'...!';
// })->where('name', '[A-Za-z]+');

Route::get('tes/get', [UserController::class, 'show'])->name('tes.get');



