Añadir un libro nuevo
<form action="{{ url('/book') }}" method='post'> 
    @csrf
    @include('book.form')
</form>