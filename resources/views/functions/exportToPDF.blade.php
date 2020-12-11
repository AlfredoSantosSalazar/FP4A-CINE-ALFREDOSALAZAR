<div>
    <h1>Lista de Funciones</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Inicio</th>
            <th>Fin</th>
            <th>Caracteristicas</th>
            <th>Tipos</th>
        </tr>
    </thead>
    @foreach($functions as $functions)
    <tbody>
        <tr>
        <td>{{ $functions->id}}</td>
        <td>{{ $functions->nombre}}</td>
        <td>{{ $functions->start}}</td>
        <td>{{ $functions->end}}</td>
        <td>{{ $functions->available}}</td>
        <td>{{ $functions->type}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
