<div class="p-8 bg-kuppet-green-light text-kuppet-green rounded-lg shadow-md animate-div">
    <h2 class="text-2xl font-bold mb-4">Test Component</h2>
    <p>{{ $message ?? 'Jamadat' }}</p>

    <button wire:click="$set('message', 'Livewire is working perfectly!')"
            class="mt-4 px-4 py-2 bg-kuppet-green text-white rounded hover:bg-kuppet-green-dark">
        Update Message
    </button>
</div>
