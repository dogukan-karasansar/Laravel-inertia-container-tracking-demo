<?php

use App\Http\Controllers\ContainerTrackingController;
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
/* Route::middleware(['auth:sanctum', 'verified'])->resource('/', ContainerTrackingController::class); */

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   Route::resource('/', ContainerTrackingController::class);
   Route::get('container/{id}', [ContainerTrackingController::class, 'show']);
});
