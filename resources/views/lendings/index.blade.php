@extends('layouts.app')

@section('content')

<a href="/lendings/new" class="btn btn-primary active">New</a>
<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lending date</th>
      <th scope="col">Return date</th>
      <th scope="col">Client name</th>
      <th scope="col">Movie</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($lendings as $lending)
    <tr>
      <td><?= $lending->id ?></td>
      <td><?= $lending->lending_date ?></td>
      <td><?= $lending->return_date ?></td>
      <td><?= $lending->client->first_name." ".$lending->client->last_name ?></td>
      <td><?= $lending->movie->name ?></td>
      <td><a href="/lendings/delete/{{ $lending->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection