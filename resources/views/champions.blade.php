<!DOCTYPE html>
<html>

<head>
    <title>champions</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
</head>

<body>
    <div class="container">
        <h1>Campeones</h1>
        <table id="championsTable" class="table table-striped table-bordered">
            @php
            $key = 0;
            $data = json_decode(json_encode($champions->data), true);
            @endphp
            <tbody>
                @foreach (array_chunk($data, 8) as $row)
                <tr>
                    @foreach ($row as $champion)
                    <td>{{ $champion['name'] }}</td>
                    <td><img src="{{ 'https://ddragon.leagueoflegends.com/cdn/10.10.3216176/img/champion/' . $champion['id'] . '.png' }}" alt="{{ $champion['name'] }}"></td>
                    @endforeach
                    @if (count($row) < 8) @for ($i=0; $i < 8 - count($row); $i++) <td>
                        </td>
                        <td></td>
                        @endfor
                        @endif
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>