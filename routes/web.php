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
use App\Http\Controllers\BritaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengumumnController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\DatakamarController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardPenghuniController;
use App\Http\Controllers\DashboardCapegController;
use App\Http\Controllers\DashboardOrangtuaController;
use App\Http\Controllers\DashboardBritaController;
use App\Http\Controllers\DashboardPengumumanController;
use App\Http\Controllers\DashboardAbsensiController;
use App\Http\Controllers\DashboardKamarController;
use App\Http\Controllers\LoginPendaftaranController;
use App\Http\Controllers\RegisterPendaftaranController;
use App\Http\Controllers\CalonPendaftaranController;
use App\Http\Controllers\OrangtuaPendaftaranController;
use App\Http\Controllers\DashboardPendaftaranController;
use App\Models\Pengumuman;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/capeg/berita', [BritaController::class, 'index']);
Route::get('/informasi/berita/{brita:slug}', [BritaController::class, 'show']);
Route::get('/capeg/pengumuman', [PengumumanController::class, 'index']);
Route::get('/informasi/pengumuman/{pengumuman:slug}', [PengumumanController::class, 'show']);

Route::get('/frontend/berita', [BeritaController::class, 'index']);
Route::get('/informasi/berita/{brita:slug}', [BeritaController::class, 'show']);
Route::get('/frontend/pengumuman', [PengumumnController::class, 'index']);
Route::get('/informasi/pengumuman/{pengumuman:slug}', [PengumumnController::class, 'show']);


Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get('/tatatertib', [TatatertibController::class, 'index'])->name('tatatertib');

Route::get('/peta', [PetaController::class, 'index'])->name('peta');
Route::get('/datakamar', [DatakamarController::class, 'index'])->name('datakamar');

Route::get('/bernda', [LayoutPenghuniController::class, 'index'])->middleware('auth');

Route::get('/berita', [BritaController::class, 'index']);
Route::get('berita/{brita:slug}', [BritaController::class, 'show']);

Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'show']);

Route::get('/asrama/absensi', [AbsensiController::class, 'index'])->middleware('auth');;
Route::post('/asrama/absensi', [AbsensiController::class, 'store'])->middleware('auth');;

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
       Route::resource('/backend/berita',DashboardBritaController::class);
       Route::resource('/backend/pengumuman',DashboardPengumumanController::class);
       Route::resource('/absensi',DashboardAbsensiController::class);
       Route::resource('/kamar',DashboardKamarController::class);
    //    Route::get('/penghuni', [DashboardCapegController::class, 'deletedPenghuni']);
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

// Pendafaran
Route::get('/login-pendaftaran', [LoginPendaftaranController::class, 'index'])->name('login-pendaftaran')->middleware('guest');
Route::post('/login-pendaftaran', [LoginPendaftaranController::class, 'authenticate']);
Route::post('/logout', [LoginPendaftaranController::class, 'logout']);

Route::get('/register-pendaftaran', [RegisterPendaftaranController::class, 'index'])->middleware('guest');
Route::post('/register-pendaftaran', [RegisterPendaftaranController::class, 'store']);

Route::resource('/calonpendaftaran', CalonPendaftaranController::class)-> middleware('auth');
Route::resource('/orangtuapendaftaran', OrangtuaPendaftaranController::class)-> middleware('auth');
Route::resource('/dashboardpendaftaran', DashboardPendaftaranController::class)-> middleware('auth');

