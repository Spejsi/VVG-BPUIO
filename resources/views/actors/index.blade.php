@extends('layouts.app')

@section('content')

<a href="/actors/new" class="btn btn-primary active">New</a>
<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($actors as $actor)
    <tr>
      <td><?= $actor->id ?></td>
      <td><?= $actor->first_name ?></td>
      <td><?= $actor->last_name ?></td>
      <td><a href="/actors/delete/{{ $actor->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection