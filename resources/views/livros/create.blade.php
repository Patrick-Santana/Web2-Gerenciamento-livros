@extends('layouts.app')
@section('content')

<form action="{{ route('livros.create') }}">

    @csrf
    <div class="form-group">
        <label for="exampleTitle">Title</label>
        <input type="title" class="form-control" placeholder="Title Of Book">
    </div>

    <div class="form-group">
        <label for="exampleNote">Note</label>
        <input type="note" class="form-control" placeholder="Note">
    </div>

    <div class="form-group">
        <label for="exampleAuthor">Author</label>
        <input type="author" class="form-control" placeholder="Author">
    </div>

    <div class="form-group">
        <label for="examplepublisher">publisher</label>
        <input type="title" class="form-control" placeholder="Publisher">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection
