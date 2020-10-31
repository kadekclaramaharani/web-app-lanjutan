<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/about-me", function () {
	return "Nama Saya <b>Kadek Clara Maharani</b>";
});

Route::get("/testing-view", function () {
	return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

/* Controller baru 1 */
use App\Http\Controllers\NewClaraController;
Route::get("/new/kadek", [NewClaraController::class, "kadek"]);
Route::get("/new/clara", [NewClaraController::class, "clara"]);
Route::get("/new/maharani", [NewClaraController::class, "maharani"]);

/* Controller baru 2 */
use App\Http\Controllers\KadekClaraController;
Route::get("kadek/sip", [KadekClaraController::class, "sip"]);
Route::get("kadek/siap", [KadekClaraController::class, "siap"]);
Route::get("kadek/gass", [KadekClaraController::class, "gass"]);

/* router dan URL baru */
Route::get("/clara", function () {
	return "Clara Maharani Lahir Di Bali Pada Tanggal 08";
});

Route::get("/alamat", function () {
	return "Clara Maharani tinggal di Jl Cendana Gg.Rimba Samarinda";
});

Route::get("/makan", function () {
	return "makanan kesukaan Clara <i><b>Bakso</i></b>";
});

Route::get("/kuliah", function () {
	return "Kadek Clara Kuliah di <u>Universitas Muhammadiyah Kalimantan Timur</u>";
});

Route::get("/clara1", function () {
	return "Clara Mahasiswa Semester 5";
});