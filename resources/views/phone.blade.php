@extends('layouts.master')
@section('content')
<div class="container">


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Phone ID</th>
    </tr>
  </thead>
  <tbody>
  @foreach($phone as $row)
    <tr>
      <th> {{$row->id}}</th>
      <td>{{$row->phone_number}}</td>
      <td> {{$row->phone_id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
