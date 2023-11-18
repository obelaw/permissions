<?php

use Illuminate\Support\Facades\Route;
use Obelaw\Permissions\Livewire\Admins\CreateAdminComponent;
use Obelaw\Permissions\Livewire\Admins\IndexAdminsComponent;
use Obelaw\Permissions\Livewire\Admins\UpdateAdminComponent;

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

Route::prefix('permissions')->group(function () {
    Route::get('/', function () {
        return view('obelaw-permissions::home');
    })->name('obelaw.permissions.home');

    Route::prefix('admins')->group(function () {
        Route::get('/', IndexAdminsComponent::class)->name('obelaw.permissions.admins.index');
        Route::get('/create', CreateAdminComponent::class)->name('obelaw.permissions.admins.create');
        Route::get('/{admin}/update', UpdateAdminComponent::class)->name('obelaw.permissions.admins.update');
    });
});
