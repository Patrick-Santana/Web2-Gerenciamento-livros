@extends('layouts.app')
@section('content')

<form action="{{ route('livros.update', $livro->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note:</strong>
                <input type="text" name="note" class="form-control" value="{{ $livro->note }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" value="{{ $livro->title }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                <input type="text" name="author" class="form-control" value="{{ $livro->author }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publisher:</strong>
                <input type="text" name="publisher" class="form-control" value="{{ $livro->publisher }}">
            </div>
        </div>
    </div>

    <div class="col text-center">
        <button type="submit" class="btn btn-primary col">Update</button>
    </div>

</form>


@endsection
