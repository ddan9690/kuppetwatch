{{-- resources/views/livewire/auth/login.blade.php --}}
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">

    <div class="w-full max-w-sm bg-white rounded-2xl shadow-xl p-8">

        <!-- Heading -->
        <h2 class="text-2xl font-bold text-primary mb-6 text-center">
            Login to Your Account
        </h2>

        <!-- Login Form -->
        <form wire:submit.prevent="login" class="space-y-4">

            <!-- Phone -->
            <div>
                <label class="text-sm font-medium text-gray-600">Phone Number</label>
                <input
                    type="text"
                    wire:model="phone"
                    placeholder="0712345678"
                    class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-primary focus:outline-none"
                >
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="text-sm font-medium text-gray-600">Password</label>
                <input
                    type="password"
                    wire:model="password"
                    placeholder="••••••••"
                    class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-primary focus:outline-none"
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Login Button -->
            <button
                type="submit"
                wire:loading.attr="disabled"
                class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-primary-dark transition"
            >
                <span wire:loading.remove>Login</span>
                <span wire:loading>Authenticating...</span>
            </button>
        </form>

    </div>
</div>