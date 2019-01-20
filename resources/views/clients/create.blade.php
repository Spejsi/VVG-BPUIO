@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/clients">
@csrf

<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="Ime">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Prezime">
</div>
<div class="form-group">
    <input class="form-control" name="address" type="text" placeholder="Adresa">
</div>
<div class="form-group">
    <input class="form-control" name="phone_number" type="text" placeholder="Telefon">
</div>
<div class="form-group">
    <input class="form-control" name="vat_id" type="text" placeholder="OIB">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection