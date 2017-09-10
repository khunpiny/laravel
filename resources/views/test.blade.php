@extends('template')

@section('title','Hello World')

@section('content')
    <h1>Hello World {{$name}}</h1>

@endsection

@section('footer')
<div class="alert alert-warning">
    <strong>@2017</strong> This alert box could indicate a warning that might need attention.
  </div>
@endsection

