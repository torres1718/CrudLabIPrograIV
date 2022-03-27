<h1>Listado de Libros</h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            
            <td> {{ $book->id}} </td>
            <td> {{ $book->title}} </td>
            <td> {{ $book->author}} </td>
            <td> {{ $book->description}} </td>
            <td> {{ $book->price}} </td>

            <form action="{{url('/book/'.$book->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <td>
                    <input type="submit" value="Eliminar"
                    onclick="return confirm('Desea eliminar el registro?')">
                </td>
            </form>

        </tr>
        @endforeach
    </tbody>
</table>
