<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Novo Livro</title>
</head>
<body>
    <h1>Adicionar Novo Livro</h1>

    <a href="{{ route('books.index') }}">Voltar para a lista de livros</a>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="subtitulo">Subtítulo:</label>
        <input type="text" id="subtitulo" name="subtitulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="edicao">Edição:</label>
        <input type="text" id="edicao" name="edicao" required><br>

        <label for="editora">Editora:</label>
        <input type="text" id="editora" name="editora" required><br>

        <label for="ano_de_publicacao">Ano de Publicação:</label>
        <input type="number" id="ano_de_publicacao" name="ano_de_publicacao" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>