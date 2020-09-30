@extends('layouts.app')
@section('content')

<form action="{{ route('livros.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleTitle">Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        <label for="exampleNote">Note</label>
        <input type="number" class="form-control" name="note">
    </div>

    <div class="form-group">
        <label for="exampleAuthor">Author</label>
        <input type="text" class="form-control" name="author">
    </div>

    <div class="form-group">
        <label for="examplepublisher">publisher</label>
        <input type="text" class="form-control" name="publisher">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection
