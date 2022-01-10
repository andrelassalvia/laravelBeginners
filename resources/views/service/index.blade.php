@extends('app')
@section('title', 'Services Page')
    
@section('content')

<h1>Services page</h1>
<p>pagina de services</p>
<form action="" method="post">
  <input type="text" name="name" autocomplete="on">
  @csrf
  <button type="submit">Add Service</button>
</form>
{{-- mensagem de erro --}}
@error('name')
<p style="color: red">
  {{$message}}
</p>
@enderror

@forelse ($services as $service)
  {{-- {{dd($service)}} --}}
  <li>{{$service->name}}</li>
  @empty
  <li>No list available</li>
@endforelse
    
@endsection