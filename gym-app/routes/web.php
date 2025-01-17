<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduledClassController;
use App\Models\ScheduledClass;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');

Route::resource('/instructor/schedule', ScheduledClassController::class)->only([
    'index',
    'create',
    'store',
    'destroy'
])->middleware(['auth', 'role:instructor']);

Route::get('/instructor/dashboard', function () {
    return view('instructor.dashboard');
})->middleware(['auth', 'role:instructor'])->name('instructor.dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:member'])->group(function() {
    Route::get('/member/dashboard', function () {
        return view('member.dashboard');
    })->name('member.dashboard');
    
    Route::get('/member/book', [BookingController::class, 'create'])->name('booking.create');
    Route::get('/member/bookings', [BookingController::class, 'index'])->name('booking.index');
    Route::post('/member/bookings', [BookingController::class, 'store'])->name('booking.store');
    Route::delete('/member/bookings', [BookingController::class, 'destroy'])->name('booking.destroy');

});

require __DIR__.'/auth.php';
