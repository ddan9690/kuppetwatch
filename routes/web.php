<?php





use App\Livewire\Auth\Login;
use App\Livewire\BranchLeadership;
use App\Livewire\Dashboard\AdminDashboard;
use App\Livewire\Dashboard\SuperAdminDashboard;
use App\Livewire\Dashboard\UserDashboard;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', Home::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/branch-leadership', BranchLeadership::class)->name('branch.leadership');

Route::middleware(['auth'])->group(function () {

    // Super Admin Dashboard
    Route::get('/super/dashboard', SuperAdminDashboard::class)
        ->middleware('can:super-admin') 
        ->name('super.dashboard');

    // Admin Dashboard
    Route::get('/admin/dashboard', AdminDashboard::class)
        ->middleware('can:admin') 
        ->name('admin.dashboard');

    // Normal User Dashboard
    Route::get('/user/dashboard', UserDashboard::class)
        ->middleware('can:user') 
        ->name('user.dashboard');
});
