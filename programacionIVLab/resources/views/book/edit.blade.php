Editar registro de libro
<form action="{{ url('/book/'.$book->id) }}" method='post'> 
    @csrf
    {{ method_field('PUT') }}
    @include('book.form')
</form>