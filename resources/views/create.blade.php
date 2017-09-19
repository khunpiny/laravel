@extends('template')
@section('title','Hello Wolrd')
@section('content')
   <form method="post" action="{{url('create')}}">
      {{csrf_field()}}
      <input type="text" name="name">
      <input type="number" name="age">
      <input type="submit" name="submit">
     </form>
@endsection