<?php

use App\Http\Controllers\BerandaCapegController;
use App\Http\Controllers\SejarahCapegController;
use App\Http\Controllers\TatatertibCapegController;
use App\Http\Controllers\PetaCapegController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LayoutPenghuniController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\TatatertibController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\DatakamarController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardPenghuniController;
use App\Http\Controllers\DashboardCapegController;
use App\Http\Controllers\DashboardOrangtuaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardPengumumanController;
use App\Http\Controllers\DashboardAbsensiController;
use App\Http\Controllers\DashboardKamarController;
use App\Models\Pengumuman;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Route
// Route::get('/', function() {
//     return view('frontend.beranda.beranda', [
//         "title" => "Beranda"
//     ]);
// });

Route::get('/', [BerandaCapegController::class, 'index'])->name('beranda');
Route::get('/capeg/sejarah', [SejarahCapegController::class, 'index'])->name('sejarah');
Route::get('/capeg/tatatertib', [TatatertibCapegController::class, 'index'])->name('tatatertib');
Route::get('/capeg/peta', [PetaCapegController::class, 'index'])->name('peta');

Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get('/tatatertib', [TatatertibController::class, 'index'])->name('tatatertib');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/peta', [PetaController::class, 'index'])->name('peta');
Route::get('/datakamar', [DatakamarController::class, 'index'])->name('datakamar');

Route::get('/bernda', [LayoutPenghuniController::class, 'index'])->middleware('auth');
Route::get('/beritas', [BeritaController::class, 'index']);
Route::get('beritas/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/pengumumen', [PengumumanController::class, 'index']);
Route::get('pengumumen/{pengumuman:slug}', [PengumumanController::class, 'show']);
Route::get('/absensi', [AbsensiController::class, 'index'])->middleware('auth');;
Route::post('/absensi', [AbsensiController::class, 'store'])->middleware('auth');;

// Route::get('login', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
       Route::resource('dashboard',DashboardController::class);
       Route::resource('/penghuni',DashboardPenghuniController::class);
       Route::resource('/calon',DashboardCapegController::class);
       Route::resource('/orangtua',DashboardOrangtuaController::class);
       Route::resource('/berita',DashboardBeritaController::class);
       Route::resource('/pengumuman',DashboardPengumumanController::class);
       Route::resource('/absensi',DashboardAbsensiController::class);
       Route::resource('/kamar',DashboardKamarController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function(){
        Route::resource('beranda',LayoutPenghuniController::class);
    });
});

// Route::get('give-permission-to-role', function () {
//     $role = Role::findOrFail(2); // penghuni

//     $permission = Permission::findOrFail(1); // create absensi    

//     $role->givePermissionTo($permission); 
// });

// Route::get('assign-role-to-user', function () {    
//     $user = User::findOrFail(3); // pengurus
//     $role = Role::findOrFail(3);       

//     $user->assignRole($role); 
// });