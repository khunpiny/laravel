@extends('template')

@section('title','Hello World')

@section('content')
    <h1>Hello World {{$name}}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection

@section('footer')
<div class="alert alert-warning">
    <strong>@2017</strong> Input name
  </div>
  <form method="POST" action="{{url('home')}}">
  {{csrf_field()}}
  <label>name</label>
  <input type="text" name="name" value="{{old('name')}}">
  <label>age</label>
  <input type="number" name="age" value="{{old('age')}}">
  <input type="submit" name="submit">
  </form>
@endsection

