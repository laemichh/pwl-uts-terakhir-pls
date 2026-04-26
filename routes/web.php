<?php
use App\Http\Controllers\mahasiswaController;  /** ini sesuaikan dengan controllernya, misal controllernya ProdukController maka ini ubah jadi use\App\Http\Controllers\ProdukController*/
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mahasiswa\create'); /**ini sesuaikan dengan keinginan, klo ingin / nya menampilkan create, maka ubah jadi return view ('nama_folder\create'). sesuaikan dengan resources\views */
});

Route::resource('mahasiswa' /**ini sesuaikan dengan nama di model, klo nama modelnya produk, maka ini ubah jadi Routee::resource('produk) */,mahasiswaController::class /** ini sesuaikan dengan controllernya, misal controllernya ProdukController maka ini ubah jadi ProdukController::class */);