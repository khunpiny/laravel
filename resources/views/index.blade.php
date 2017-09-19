@extends('template')

@section('title','Hello World')

@section('content')
    <h1>Hello World {{$name}} {{$age}} </h1>
    <br>
    <h1>BMI = {{$bmi}}</h1>
    <a href="{{ url('test')}}"><h4>next</h4></a>
   

@endsection