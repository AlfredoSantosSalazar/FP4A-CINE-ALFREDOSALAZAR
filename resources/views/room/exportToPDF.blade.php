<div>
    <h1>Lista de Salas</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Sillas</th>
            <th>Localizacion</th>
            <th>Capacidad</th>
        </tr>
    </thead>
    @foreach($room as $room)
    <tbody>
        <tr>
        <td>{{ $room->id}}</td>
        <td>{{ $room->chairs}}</td>
        <td>{{ $room->location}}</td>
        <td>{{ $room->capacy}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
