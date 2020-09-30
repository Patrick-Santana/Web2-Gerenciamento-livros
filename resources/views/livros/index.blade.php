@extends('layouts.app')
@section('content')

<table class="table">
    <thead class="thead-dark">

        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th width="280px"> Action</th>
        </tr>

        @foreach ($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>

            <td>
                <a href="{{ url("/livros/{$livro->id}") }}">
                    {{ $livro->title }}
                </a>
            </td>

            <td>
                <a href="{{ url("/livros/{$livro->id}") }}">
                    {{ $livro->author }}
                </a>
            </td>

            <td>
                <a href="{{ url("/livros/{$livro->id}") }}">
                    {{ $livro-> publisher }}
                </a>
            </td>

            <td>
                <form action="{{ route('livros.destroy', $livro->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('livros.show', $livro->id) }}">
                    Show</a>
                    <a class="btn btn-primary" href="{{ route('livros.edit', $livro->id) }}">
                    Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Delete</button>
                </form>
            </td>
        </tr>

        </thead>
    @endforeach
</table>

@endsection
