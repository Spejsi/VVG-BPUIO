@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/movies">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Movie name">
</div>
<div class="form-group">
    <input class="form-control" name="year" type="text" placeholder="Year">
</div>
<div class="form-group">
    <input class="form-control" name="duration" type="text" placeholder="Duration">
</div>
<div class="form-group">
    <input class="form-control" name="prize" type="text" placeholder="Prize">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection