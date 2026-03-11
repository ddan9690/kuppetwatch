<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

            // Redirect based on Gates
            if (Gate::allows('super-admin')) {
                return redirect()->route('super.dashboard');
            }

            if (Gate::allows('admin')) {
                return redirect()->route('admin.dashboard');
            }

            // Default to normal user
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