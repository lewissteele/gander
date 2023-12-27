<div class="navbar bg-base-100">
    <a class="btn btn-ghost text-xl">Gander</a>
    <select wire:model.live="database" class="select select-bordered w-full max-w-xs">
        @foreach ($databases as $database)
            <option value="{{ $database->id }}">
                {{ $database->database }} @ {{ $database->host }}
            </option>
        @endforeach
    </select>
</div>
