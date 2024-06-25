@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" class="form-control" id="edition" name="edition" value="{{ $book->edition }}">
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
        </div>
        <div class="form-group">
            <label for="publication_year">Publication Year</label>
            <input type="number" class="form-control" id="publication_year" name="publication_year" value="{{ $book->publication_year }}">
        </div>
        <div class="form-group">
            <label for="cover_image">Cover Image</label>
            <input type="file" class="form-control-file" id="cover_image" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection
