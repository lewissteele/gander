<div class="navbar bg-base-100">
    <a class="btn btn-ghost text-xl">Gander</a>

    <button wire:click="$dispatch('show-create-database')" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>

    <select wire:model.live="database" class="select select-bordered w-full max-w-xs">
        @foreach ($databases as $database)
            <option value="{{ $database->id }}">
                {{ $database->database }} @ {{ $database->host }}
            </option>
        @endforeach
    </select>
</div>
