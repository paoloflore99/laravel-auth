<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController as ControllersProjectController;
use App\Http\Controllers\ProvaController;
use Illuminate\Support\Facades\Route;

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
    return view('guests.welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




//creazione gruppi middleware
//controllo della registrazione , per accedere alla rotte
route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    Route::get("/projects/create", [ProjectController::class, "create"])->name("projects.create");
    Route::post("/projects", [ProjectController::class, "store"])->name("projects.store");

    Route::get("/projects/{project}", [ProjectController::class, "show"])->name("projects.show");
    Route::get("/projects", [ControllerProjectController::class, "index"])->name("projects.index");

    Route::patch("/projects/{project}", [ProjectController::class, "update"])->name("projects.update");

    Route::get("/projects/{project}/edit", [ProjectController::class, "edit"])->name("projects.edit");
    Route::delete("/projects/{project}", [ProjectController::class, "destroy"])->name("projects.destroy");

});

//controller publico ControllersProjectController
Route::get("/projects" ,[ControllersProjectController::class, "index"])->name("projects.index");


Route::middleware('auth')
    ->prefix('/admin')
    ->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__.'/auth.php';
