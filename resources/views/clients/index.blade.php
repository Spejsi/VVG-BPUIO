@extends('layouts.app')

@section('content')

<a href="/clients/new" class="btn btn-primary active">New</a>
<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone number</th>
      <th scope="col">VAT</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($clients as $client)
    <tr>
      <td><?= $client->id ?></td>
      <td><?= $client->first_name ?></td>
      <td><?= $client->last_name ?></td>
      <td><?= $client->address ?></td>
      <td><?= $client->phone_number ?></td>
      <td><?= $client->vat_id ?></td>
      <td><a href="/clients/delete/{{ $client->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection