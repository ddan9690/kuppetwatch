<?php

use App\Livewire\Auth\Login;
use App\Livewire\BranchLeadership;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', Home::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/branch-leadership', BranchLeadership::class)->name('branch.leadership');