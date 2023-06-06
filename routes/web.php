<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\FasilitaskamarController;
use App\Http\Controllers\JenishotelController;
use App\Http\Controllers\AtraksiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JeniskamarController;


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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path.'\dashboard\Analytics@index')->name('dashboard-analytics');

// layout
Route::get('/layouts/without-menu', $controller_path.'\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path.'\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path.'\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path.'\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path.'\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path.'\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path.'\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path.'\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path.'\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path.'\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path.'\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path.'\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path.'\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path.'\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path.'\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path.'\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path.'\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path.'\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path.'\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path.'\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path.'\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path.'\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path.'\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path.'\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path.'\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path.'\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path.'\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path.'\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path.'\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path.'\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path.'\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path.'\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path.'\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path.'\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path.'\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path.'\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path.'\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path.'\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path.'\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path.'\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path.'\tables\Basic@index')->name('tables-basic');

// crud
//akun 
Route::get('/crud/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/crud/admin', [AdminController::class, 'store'])->name('adminentry');
Route::post('/crud/admin/edit/{id}', [AdminController::class, 'update'])->name('admin-edit');
Route::get('/crud/admin/{id}', [AdminController::class, 'destroy'])->name('admin-destroy');
Route::get('/pdf-admin', [AdminController::class, 'exportpdf'])->name('pdfadmin');

//hotel
Route::get('/crud/hotel', [HotelController::class, 'index'])->name('hotel');
Route::post('/crud/hotel/add', [HotelController::class, 'store'])->name('hotelentry');
Route::post('/crud/hotel/edit/{id}', [HotelController::class, 'update'])->name('hotel-edit');
Route::get('/crud/hotel/{id}', [HotelController::class, 'destroy'])->name('hotel-destroy');
Route::get('/pdf-hotel', [HotelController::class, 'exportpdf'])->name('pdfhotel');

//pemesanan
Route::get('/crud/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/crud/pemesanan/add', [PemesananController::class, 'store'])->name('pemesananentry');
Route::post('/crud/pemesanan/edit/{id}', [PemesananController::class, 'update'])->name('pemesanan-edit');
Route::get('/crud/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan-destroy');
Route::get('/pdf-pemesanan', [PemesananController::class, 'exportpdf'])->name('pdfpemesanan');

//wisata
Route::get('/crud/wisata', [WisataController::class, 'index'])->name('wisata');
Route::post('/crud/wisata/add', [WisataController::class, 'store'])->name('wisataentry');
Route::post('/crud/wisata/edit/{id}', [WisataController::class, 'update'])->name('wisata-edit');
Route::get('/crud/wisata/{id}', [WisataController::class, 'destroy'])->name('wisata-destroy');
Route::get('/pdf-wisata', [WisataController::class, 'exportpdf'])->name('pdfwisata');

//kamar
Route::get('/crud/kamar', [KamarController::class, 'index'])->name('kamar');
Route::post('/crud/kamar/add', [KamarController::class, 'store'])->name('kamarentry');
Route::post('/crud/kamar/edit/{id}', [KamarController::class, 'update'])->name('kamar-edit');
Route::get('/crud/kamar/{id}', [KamarController::class, 'destroy'])->name('kamar-destroy');

Route::get('/crud/pegawai', $controller_path.'\crud\pegawai@index')->name('pegawai');

//penilaian
Route::get('/crud/penilaian', [PenilaianController::class, 'index'])->name('penilaian');
Route::post('/crud/penilaian/add', [PenilaianController::class, 'store'])->name('penilaianentry');
Route::post('/crud/penilaian/edit/{id}', [PenilaianController::class, 'update'])->name('penilaian-edit');
Route::get('/crud/penilaian/{id}', [PenilaianController::class, 'destroy'])->name('penilaian-destroy');

//fasilitas
Route::get('/crud/fasilitaskamar', [FasilitaskamarController::class, 'index'])->name('fasilitaskamar');
Route::post('/crud/fasilitaskamar/add', [FasilitaskamarController::class, 'store'])->name('fasilitaskamarentry');
Route::post('/crud/fasilitaskamar/edit/{id}', [FasilitaskamarController::class, 'update'])->name('fasilitaskamar-edit');
Route::get('/crud/fasilitaskamar/{id}', [FasilitaskamarController::class, 'destroy'])->name('fasilitaskamar-destroy');

//jenis hotel
Route::get('/crud/jenishotel', [JenishotelController::class, 'index'])->name('jenishotel');
Route::post('/crud/jenishotel/add', [JenishotelController::class, 'store'])->name('jenishotelentry');
Route::post('/crud/jenishotel/edit/{id}', [JenishotelController::class, 'update'])->name('jenishotel-edit');
Route::get('/crud/jenishotel/{id}', [JenishotelController::class, 'destroy'])->name('jenishotel-destroy');

//atraksi
Route::get('/crud/atraksi', [AtraksiController::class, 'index'])->name('atraksi');
Route::post('/crud/atraksi/add', [AtraksiController::class, 'store'])->name('atraksientry');
Route::post('/crud/atraksi/edit/{id_atraksi}', [AtraksiController::class, 'update'])->name('atraksi-edit');
Route::get('/crud/atraksi/{id}', [AtraksiController::class, 'destroy'])->name('atraksi-destroy');

//pegawai
Route::get('/crud/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::post('/crud/pegawai/add', [PegawaiController::class, 'store'])->name('pegawaientry');
Route::post('/crud/pegawai/edit/{id}', [PegawaiController::class, 'update'])->name('pegawai-edit');
Route::get('/crud/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai-destroy');
Route::get('/pdf-pegawai', [PegawaiController::class, 'exportpdf'])->name('pdfpegawai');

//jenis kamar
Route::get('/crud/jeniskamar', [JeniskamarController::class, 'index'])->name('jeniskamar');
Route::post('/crud/jeniskamar/add', [JeniskamarController::class, 'store'])->name('jeniskamarentry');
Route::post('/crud/jeniskamar/edit/{id}', [JeniskamarController::class, 'update'])->name('jeniskamar-edit');
Route::get('/crud/jeniskamar/{id}', [JeniskamarController::class, 'destroy'])->name('jeniskamar-destroy');






