<table class="table table-zebra table-pin-rows">
    <thead>
        <tr>
            @foreach ($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
            <tr>
                @foreach ($row as $value)
                    <th>{{ $value }}</th>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
