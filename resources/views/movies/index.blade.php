@extends('layouts.app')

@section('content')

<a href="/movies/new" class="btn btn-primary active">New</a>
<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Year</th>
      <th scope="col">Duration</th>
      <th scope="col">Prize</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($movies as $movie)
    <tr>
      <td><?= $movie->id ?></td>
      <td><?= $movie->name ?></td>
      <td><?= $movie->year ?></td>
      <td><?= $movie->duration ?></td>
      <td><?= $movie->prize ?></td>
      <td><a href="/movies/delete/{{ $movie->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection