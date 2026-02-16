<?php

use App\Http\Livewire\Home;




use App\Livewire\AtangaComponent;
use App\Livewire\EuniceOuruComponent;
use App\Livewire\FelixJohnComponent;
use App\Livewire\HomeComponent;
use App\Livewire\NyanzaResultsComponent;
use App\Livewire\RaphaelComponent;
use App\Livewire\TeamChangeComponent;
use App\Livewire\TestComponent;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/test', TestComponent::class)->name('test');
Route::get('/raphael', RaphaelComponent::class)->name('raphael.component');
Route::get('/raphael/5-point-agenda', RaphaelComponent::class)->name('raphael.agenda');
Route::get('/campaign/atanga-kennedy', AtangaComponent::class)->name('atanga.component');
Route::get('/campaign/kuppet-homabay-elections-the-drama-of-borrowed-disability-and-outright-inability', EuniceOuruComponent::class)->name('eunice.component');
Route::get('/team-change/homa-bay/kuppet', TeamChangeComponent::class)->name('team.change');
Route::get('/felix-john', FelixJohnComponent::class)->name('felix-john');
Route::get('/the-new-face-of-kuppet-nyanza-leadership-2026-2031-reform-wave', NyanzaResultsComponent::class)
    ->name('kuppet.nyanza.reform.wave');
