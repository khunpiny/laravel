@extends('template')
@section('title','Hello World')
@section('content')
    @if(isset($humans) && !empty($humans))
      @foreach($humans as $human)
      <ul>
          <li>{{$human->name}}  <a href="{{url('/update')}}/{{$human->id}}">Edit</a>
          <a href="{{url('/delete')}}/{{$human->id}}">Delete</a>
          <li>{{$human->age}}
      </ul>
      @endforeach
    @endif
@endsection
