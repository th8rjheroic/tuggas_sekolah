<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
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
        'photo'=>'..'
    ];
    return view('biodata', $Biodata);
});

route::get('/list', [BiodataController::class, 'index']);