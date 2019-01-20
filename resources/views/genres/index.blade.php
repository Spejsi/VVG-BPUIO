@extends('layouts.app')

@section('content')

<a href="/genres/new" class="btn btn-primary active">New</a>
<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($genres as $genre)
    <tr>
      <td><?= $genre->id ?></td>
      <td><?= $genre->name ?></td>
      <td><a href="/genres/delete/{{ $genre->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection