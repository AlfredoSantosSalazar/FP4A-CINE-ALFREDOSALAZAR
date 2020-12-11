<div>
    <h1>Lista de Peliculas</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Sinopsis</th>
            <th>Categoria</th>
            <th>Director</th>
            <th>duracion</th>
            <th>actores</th>
            <th>genero</th>
            
        </tr>
    </thead>
    @foreach($movies as $movies)
    <tbody>
        <tr>
        <td>{{ $movies->id}}</td>
        <td>{{ $movies->name}}</td>
        <td>{{ $movies->synopsis}}</td>
        <td>{{ $movies->category}}</td>
        <td>{{ $movies->director}}</td>
        <td>{{ $movies->duration}}</td>
        <td>{{ $movies->actors}}</td>
        <td>{{ $movies->gender}}</td>

         </tr>
    </tbody>
    @endforeach
</table>
