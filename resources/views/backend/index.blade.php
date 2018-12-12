@extends('backend.master')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Name</th>
    <!--<th>Last Name</th>-->
    <th>Email</th>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->first_name}} {{$user->last_name}}</td>
      <td>{{$user->email}}</td>
     <td><a href="{{action('HomeController@downloadPDF', $user->id)}}">PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<!--<button type="button" class="btn btn-primary" href="{{URL::to('Login')}}">Primary</button>-->
<!--<a class="btn btn-primary" href="{{URL::to('login')}}">Login</a>-->
@endsection