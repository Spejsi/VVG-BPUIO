@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/genres">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection