@extends('layouts.app') 

@section('title', 'Viaggi')
    
@section('content')


  @foreach ($viaggi as $viaggio)

  <h2>{{$viaggio->title}}</h2> 
  <div>{{$viaggio->where}}</div> 
  <div>{{$viaggio->cost}}</div> 
  <div>{{$viaggio->description}}</div> 

  <hr>
  
  @endforeach
    
@endsection