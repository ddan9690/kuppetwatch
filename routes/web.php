<?php

use Livewire\Volt\Volt;



use App\Http\Livewire\Home;
use App\Livewire\HomeComponent;
use App\Livewire\TestComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/test', TestComponent::class)->name('home');
