<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de livros</h1>

    <a style="background-color: rgb(249, 236, 238)" href="{{ route('dashboard') }}">voltar pa tela anterior</a>
    <a href="{{ route('livros.create') }}">Adicional novo livro</a>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Autor</th>
                <th>Edição</th>
                <th>Editora</th>
                <th>Ano de Publicação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->titulo }}</td>
                    <td>{{ $book->subtitulo }}</td>
                    <td>{{ $book->autor }}</td>
                    <td>{{ $book->edicao }}</td>
                    <td>{{ $book->editora }}</td>
                    <td>{{ $book->ano_de_publicacao }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}">Editar</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


