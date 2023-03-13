<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Area\ImportExcelController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes(['register' => false]);

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // For Area
    Route::get('/area', [AreaController::class, 'index'])->name('area.index');
    Route::get('/area/create', [AreaController::class, 'create'])->name('area.create');
    Route::post('/area', [AreaController::class, 'store'])->name('area.store');
    Route::post('area-import', ImportExcelController::class)->name('area.import');
    Route::get('/area/{area}/edit', [AreaController::class, 'edit'])->name('area.edit');
    Route::put('/area/{area}', [AreaController::class, 'update'])->name('area.update');
    Route::delete('/area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');
});
