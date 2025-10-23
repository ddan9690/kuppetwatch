<?php

use Livewire\Volt\Volt;




use App\Http\Livewire\Home;
use App\Livewire\HomeComponent;
use App\Livewire\TestComponent;
use App\Livewire\AtangaComponent;
use App\Livewire\RaphaelComponent;
use App\Livewire\FelixJohnComponent;
use App\Livewire\EuniceOuruComponent;
use App\Livewire\TeamChangeComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/test', TestComponent::class)->name('home');
Route::get('/raphael', RaphaelComponent::class)->name('raphael.component');
Route::get('/raphael/5-point-agenda', RaphaelComponent::class)->name('raphael.agenda');
Route::get('/campaign/atanga-kennedy', AtangaComponent::class)->name('atanga.component');
Route::get('/campaign/kuppet-homabay-elections-the-drama-of-borrowed-disability-and-outright-inability', EuniceOuruComponent::class)->name('eunice.component');
Route::get('/team-change/homa-bay/kuppet', TeamChangeComponent::class)->name('team.change');
Route::get('/felix-john', FelixJohnComponent::class)->name('felix-john');