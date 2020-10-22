<!-- ###### partials/fields.blade.php ###### -->
<ul>
    <li><a href="/livros_alessandrooliveira/{{ $livro->id }}">{{ $livro->titulo }}</a></li>
    <li>{{ $livro->autor }}</li>
    <li>{{ $livro->isbn }}</li>
    <li>
        <form action="/livros_alessandrooliveira/{{ $livro->id }}" method="post">
        @csrf
        <button type="button" onclick="location.href='/livros_alessandrooliveira/{{ $livro->id }}/edit';">Editar</button>
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
        </form>
    </li> 
</ul>


