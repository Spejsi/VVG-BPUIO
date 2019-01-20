@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/actors">
@csrf

<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="Ime">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Prezime">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection