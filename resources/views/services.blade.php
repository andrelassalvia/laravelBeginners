@extends('app')
@section('title', 'Services Page')
    
@section('content')

<h1>Services page</h1>
<p>pagina de services</p>
@forelse ($services as $service)
  {{-- {{dd($service)}} --}}
  <li>{{$service->name}}</li>
  @empty
  <li>No list available</li>
@endforelse
    
@endsection