<?php

use App\Http\Livewire\Home;
use App\Livewire\AtangaComponent;
use App\Livewire\Candidates;
use App\Livewire\ComparativeAnalysis;
use App\Livewire\EuniceOuruComponent;
use App\Livewire\FelixJohnComponent;
use App\Livewire\FirstToMarch;
use App\Livewire\HomeComponent;
use App\Livewire\NyanzaResultsComponent;
use App\Livewire\RaphaelComponent;
use App\Livewire\RingaTour;
use App\Livewire\Support;
use App\Livewire\TeamChangeComponent;
use App\Livewire\TestComponent;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/campaign/atanga-kennedy', AtangaComponent::class)->name('atanga.component');
Route::get('/campaign/kuppet-homabay-elections-the-drama-of-borrowed-disability-and-outright-inability', EuniceOuruComponent::class)->name('eunice.component');
Route::get('/felix-john', FelixJohnComponent::class)->name('felix-john');
Route::get('/kuppet-homabay-elections-1st-march', FirstToMarch::class)
    ->name('kuppet.homabay.march.elections');

Route::get('/team-change-kuppet-homabay', Candidates::class)->name('candidates');
Route::get('/fuel-the-change-stand-for-teachers', Support::class)->name('support');
Route::get('/kuppet-homabay-2026-election-comparative-analysis', ComparativeAnalysis::class)
    ->name('comparative.analysis');

Route::get('/getting-down-to-work-new-kuppet-homabay-office-begins-work', RingaTour::class)
    ->name('ringa.tour');