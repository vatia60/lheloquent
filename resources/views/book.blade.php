@extends('layouts.master')
@section('content')
<div class="container">


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
  @foreach($book as $row)
    <tr>
      <th> {{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td> {{$row->author}}</td>
      <td> {{$row->phone_number}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
