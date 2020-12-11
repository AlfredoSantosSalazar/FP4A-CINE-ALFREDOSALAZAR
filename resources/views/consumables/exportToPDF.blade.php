<div>
    <h1>Lista de Consumibles</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    @foreach($consumables as $consumables)
    <tbody>
        <tr>
        <td>{{ $consumables->id}}</td>
        <td>{{ $consumables->name}}</td>
        <td>{{ $consumables->price}}</td>
        <td>{{ $consumables->quantity}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
