<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $phone = '';
    public $password = '';

    protected $rules = [
        'phone' => 'required',
        'password' => 'required'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'phone' => $this->phone,
            'password' => $this->password
        ])) {

            session()->regenerate();

            $user = auth()->user();

            if ($user->hasRole('super admin')) {
                return redirect()->route('super.dashboard');
            }

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('user.dashboard');
        }

        $this->addError('phone', 'Invalid phone number or password');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.app', ['title' => 'Login']);
    }
}