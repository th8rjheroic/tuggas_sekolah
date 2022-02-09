<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\BiodataController;
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
    return view('home');
});
Route::get('biodata', function () {
    $Biodata= [
         'nama'=>'muhamad farhan',
        'lahir'=>'Bandung, 14 mei 2004',
        'hobi'=>'Workout',
        'jk'=>'Laki-laki',
        'agama'=>'Islam',
        'alamat'=>'kom.posgiro',
        'telp'=>'088220529817',
        'email'=>'th8rjheroic@gmail.com',
    
    ];
    return view('biodata', $Biodata);
});

Route::get('/list', [BiodataController::class, 'index'])->name('list');
Route::get('/form_siswa', [BiodataController::class, 'create'])->name('form_siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa'); \
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
