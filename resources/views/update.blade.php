@extends('template')
@section('title','Update human')
@section('content')
      @if(isset($human) && !empty($human))
   <form method="post" action="{{ url('/update')}}">
     {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $human->id }}">
      <input type="text" name="name" value="{{ $human->name }}">
      <input type="number" name="age" value="{{ $human->age }}">
      <input type="submit" name="submit">
    </form>
      @else
         <p>บางอย่างผิดพลาด</p>
      @endif
@endsection