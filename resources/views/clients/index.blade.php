<?php
?>

BLADE (THE BETTER)
<table border="1">
    <tr>
        <td>NAME</td>
        <td>LAST NAME</td>
        <td>NUMBER</td>
        <td>ESTATUS</td>
        <td>BIRTHDAY</td>
    </tr>
    @foreach ($clients as $client)
        @php
            $color = ($client->status) ? 'gris' : 'red';
            //$classColor = ($client->status) ? '' : 'color-red';
            $classColor = ($client->status) ?: 'color-red';
        @endphp
        <!--tr style='background-color: {{$color}};' -->
        <tr class="{{ $classColor }}">
            <td>{{ $client->fisrt_name }}</td>
            <td>{{ $client->last_name }}</td>
            <td>{{ $client->number }}</td>
            <td>{{ $client->status }}</td>
            <td>{{ $client->birthdate }}</td>

        </tr>
    @endforeach
</table>
