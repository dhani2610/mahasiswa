<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryLogController;
use App\Http\Controllers\JurnalPemasukanController;
use App\Http\Controllers\JurnalPengeluaranController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembayaranSppController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PosKeuanganController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\UserController;
use App\Models\JurnalPengeluaran;
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
    $data['page_title'] = "Home";
    return view('welcome', $data);
})->name('welcome');

Route::get('login-admin', function () {
    $data['page_title'] = "Login Admin";
    return view('auth.login-admin', $data);
})->name('login-admin');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('loginPost2', [UserController::class, 'loginPost2'])->name('loginPost2');
Route::post('loginPostAdmin', [UserController::class, 'loginPostAdmin'])->name('loginPostAdmin');

Route::middleware('auth:web')->group(function () {
    // Dashboard admin
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
    // Dashboard umum
    
    Route::get('mahasiswa-list', [MahasiswaController::class, 'index'])->name('mahasiswa-list');
    Route::get('mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa-create');
    Route::post('mahasiswa-store', [MahasiswaController::class, 'store'])->name('mahasiswa-store');
    Route::get('mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa-edit');
    Route::post('mahasiswa-update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa-update');
    Route::get('mahasiswa-destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa-destroy');

    Route::get('prodi-list', [ProdiController::class, 'index'])->name('prodi-list');
    Route::get('prodi-create', [ProdiController::class, 'create'])->name('prodi-create');
    Route::post('prodi-store', [ProdiController::class, 'store'])->name('prodi-store');
    Route::get('prodi-edit/{id}', [ProdiController::class, 'edit'])->name('prodi-edit');
    Route::post('prodi-update/{id}', [ProdiController::class, 'update'])->name('prodi-update');
    Route::get('prodi-destroy/{id}', [ProdiController::class, 'destroy'])->name('prodi-destroy');

    Route::get('tahun-ajaran-list', [TahunAjaranController::class, 'index'])->name('tahun-ajaran-list');
    Route::get('tahun-ajaran-create', [TahunAjaranController::class, 'create'])->name('tahun-ajaran-create');
    Route::post('tahun-ajaran-store', [TahunAjaranController::class, 'store'])->name('tahun-ajaran-store');
    Route::get('tahun-ajaran-edit/{id}', [TahunAjaranController::class, 'edit'])->name('tahun-ajaran-edit');
    Route::post('tahun-ajaran-update/{id}', [TahunAjaranController::class, 'update'])->name('tahun-ajaran-update');
    Route::get('tahun-ajaran-destroy/{id}', [TahunAjaranController::class, 'destroy'])->name('tahun-ajaran-destroy');

    Route::get('jurnal-pemasukan-list', [JurnalPemasukanController::class, 'index'])->name('jurnal-pemasukan-list');
    Route::get('jurnal-pemasukan-create', [JurnalPemasukanController::class, 'create'])->name('jurnal-pemasukan-create');
    Route::post('jurnal-pemasukan-store', [JurnalPemasukanController::class, 'store'])->name('jurnal-pemasukan-store');
    Route::get('jurnal-pemasukan-edit/{id}', [JurnalPemasukanController::class, 'edit'])->name('jurnal-pemasukan-edit');
    Route::post('jurnal-pemasukan-update/{id}', [JurnalPemasukanController::class, 'update'])->name('jurnal-pemasukan-update');
    Route::get('jurnal-pemasukan-destroy/{id}', [JurnalPemasukanController::class, 'destroy'])->name('jurnal-pemasukan-destroy');

    Route::get('jurnal-pengeluaran-list', [JurnalPengeluaranController::class, 'index'])->name('jurnal-pengeluaran-list');
    Route::get('jurnal-pengeluaran-create', [JurnalPengeluaranController::class, 'create'])->name('jurnal-pengeluaran-create');
    Route::post('jurnal-pengeluaran-store', [JurnalPengeluaranController::class, 'store'])->name('jurnal-pengeluaran-store');
    Route::get('jurnal-pengeluaran-edit/{id}', [JurnalPengeluaranController::class, 'edit'])->name('jurnal-pengeluaran-edit');
    Route::post('jurnal-pengeluaran-update/{id}', [JurnalPengeluaranController::class, 'update'])->name('jurnal-pengeluaran-update');
    Route::get('jurnal-pengeluaran-destroy/{id}', [JurnalPengeluaranController::class, 'destroy'])->name('jurnal-pengeluaran-destroy');

    Route::get('pos-keuangan-list', [PosKeuanganController::class, 'index'])->name('pos-keuangan-list');
    Route::get('pos-keuangan-create', [PosKeuanganController::class, 'create'])->name('pos-keuangan-create');
    Route::post('pos-keuangan-store', [PosKeuanganController::class, 'store'])->name('pos-keuangan-store');
    Route::get('pos-keuangan-edit/{id}', [PosKeuanganController::class, 'edit'])->name('pos-keuangan-edit');
    Route::post('pos-keuangan-update/{id}', [PosKeuanganController::class, 'update'])->name('pos-keuangan-update');
    Route::get('pos-keuangan-destroy/{id}', [PosKeuanganController::class, 'destroy'])->name('pos-keuangan-destroy');

    Route::get('pengumuman-list', [PengumumanController::class, 'index'])->name('pengumuman-list');
    Route::get('pengumuman-create', [PengumumanController::class, 'create'])->name('pengumuman-create');
    Route::post('pengumuman-store', [PengumumanController::class, 'store'])->name('pengumuman-store');
    Route::get('pengumuman-edit/{id}', [PengumumanController::class, 'edit'])->name('pengumuman-edit');
    Route::post('pengumuman-update/{id}', [PengumumanController::class, 'update'])->name('pengumuman-update');
    Route::get('pengumuman-destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman-destroy');

    Route::get('pembayaran-spp-list', [PembayaranSppController::class, 'index'])->name('pembayaran-spp-list');
    Route::get('pembayaran-spp-mhs/{id}', [PembayaranSppController::class, 'create'])->name('pembayaran-spp-mhs');
    Route::post('send-pembayaran/{id}', [PembayaranSppController::class, 'store'])->name('send-pembayaran');

    Route::get('report-spp', [ReportController::class, 'spp'])->name('report-spp');


    // Master Data
     Route::get('master-data', function () {
        $data['page_title'] = 'Master Data';
        $data['breadcumb'] = 'Master Data';
        return view('master-data.index', $data);
    })->name('master-data.index');

    // Departement
    Route::resource('departements', DepartementController::class);

    // Users
    Route::patch('change-password', [UserController::class, 'changePassword'])->name('users.change-password');
    Route::resource('users', UserController::class)->except([
        'show'
    ]);;

    Route::get('user-destroy/{id}', [UserController::class, 'destroy'])->name('user-destroy');

    
    // History Log
    Route::resource('history-log', HistoryLogController::class)->except([
        'show', 'create', 'store', 'edit', 'update'
    ]);;

    // profilr edit
    Route::resource('profile', ProfileController::class)->except([
        'show','create', 'store'
    ]);;
    Route::patch('change-password-profile', [ProfileController::class, 'changePassword'])->name('profile.change-password');


});

