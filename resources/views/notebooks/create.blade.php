@extends('layouts.base')


@section('content')
    <div class="container">
    <h1>Create Notebooks</h1>

    <form action="/notebooks" method="POST">
     {{csrf_field()}}
    <div class="form-group">
        <label for="name">Notebook Name</label>

        <input class="form-control" type="text" name="name">

    </div>
        <input class="btn btn-primary" type="submit" name="Done">
        </input>
    </form>
        </div>
@stop