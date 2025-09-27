<?php

use Livewire\Volt\Volt;




use App\Http\Livewire\Home;
use App\Livewire\HomeComponent;
use App\Livewire\TestComponent;
use App\Livewire\AtangaComponent;
use App\Livewire\RaphaelComponent;
use App\Livewire\EuniceOuruComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/test', TestComponent::class)->name('home');
Route::get('/raphael', RaphaelComponent::class)->name('raphael.component');
Route::get('/raphael/5-point-agenda', RaphaelComponent::class)->name('raphael.agenda');
Route::get('/campaign/atanga-kennedy', AtangaComponent::class)->name('atanga.component');
Route::get('/campaign/kuppet-homabay-elections-the-drama-of-borrowed-disability-and-outright-inability', EuniceOuruComponent::class)->name('eunice.component');
