<ul class="menu bg-base-200 w-56 rounded-box">
    @foreach ($tables as $table)
            <li>
                <a
                    wire:click="$set('active', '{{ $table }}')"
                    @class(['active' => $table === $active])
                >
                    {{ $table }}
                </a>
            </li>
    @endforeach
</ul>
