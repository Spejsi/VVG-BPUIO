@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/lendings">
@csrf

<div class="form-group">
    <input class="form-control" name="lending_date" type="date" placeholder="Lending date">
</div>
<div class="form-group">
    <input class="form-control" name="return_date" type="date" placeholder="Return date">
</div>

<div class="form-group">
    <select class="form-control" name="client_id">
        @foreach($clients as $client)
        <option value="{{ $client->id }}">{{ $client->first_name." ".$client->last_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="movie_id">
        @foreach($movies as $movie)
        <option value="{{ $movie->id }}">{{ $movie->name." (".$movie->year.")" }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection