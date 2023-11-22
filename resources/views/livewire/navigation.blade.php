<div class="navbar bg-base-100">
    <a class="btn btn-ghost text-xl">Gander</a>
    <select class="select select-bordered w-full max-w-xs">
        <option disabled selected>Select database</option>

        @foreach ($databases as $database)
            <option value="{{ $database->id }}">
                {{ $database->host }}
            </option>
        @endforeach
    </select>
</div>
