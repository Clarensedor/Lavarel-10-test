<!DOCTYPE html>
<html>

<head>
    <title>items</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
</head>

<body>
    <div class="container">
        <h1>Objetos</h1>
        <table id="itemsTable" class="table table-striped table-bordered">
            @php
            $key = 0;
            $data = json_decode(json_encode($items->data), true);
            @endphp


            <tbody>
                @foreach (array_chunk($data, 8) as $row)
                <tr>
                    @foreach ($row as $item)
                    @if ($item['gold']['purchasable'] == 1 && isset($item['image']))
                    <td>{{ $item['name'] }}</td>
                    <td><img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.23.1/img/item/' . $item['image']['full'] }}" alt="{{ $item['name'] }}"></td>
                    @endif
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