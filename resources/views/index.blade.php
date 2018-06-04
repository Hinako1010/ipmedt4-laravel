@extends('master')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Voornaam</th>

    <th>Action</th>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->voornaam}}</td>
      <!-- <td>{{$user->street_address}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->zip_code}}</td> -->
      <td><a href="{{action('UserDetailController@downloadPDF', $user->id)}}">PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
