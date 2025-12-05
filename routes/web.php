<?php

use App\Livewire\ContactUs;
use App\Livewire\HomePage;
use App\Livewire\OnlineClass;
use App\Livewire\PastPapers;
use App\Livewire\PhysicalClass;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/',HomePage::class)->name('home');
Route::get('/past-papers',PastPapers::class)->name('past-papers');

Route::get('/classes/online',OnlineClass::class)->name('online-class');
Route::get('/classes/physical',PhysicalClass::class)->name('physical-class');

Route::get('/contact',ContactUs::class)->name('contact');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
