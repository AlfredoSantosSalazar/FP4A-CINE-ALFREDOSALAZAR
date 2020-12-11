<div>
    <h1>Lista de Entradas</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Sala</th>
            <th>Precio</th>
            <th>Hora de Entrada</th>
        </tr>
    </thead>
    @foreach($entrances as $entrances)
    <tbody>
        <tr>
        <td>{{ $entrances->id}}</td>
        <td>{{ $entrances->name}}</td>
        <td>{{ $entrances->sala}}</td>
        <td>{{ $entrances->prince}}</td>
        <td>{{ $entrances->hourEntrance}}</td>
    </tr>
    </tbody>
    @endforeach
</table>
