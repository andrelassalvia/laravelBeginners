<h1>Customer Details</h1>

<div style="margin-bottom: 10px">

  <p>{{$customer->name}}</p>
  <p>{{$customer->email}}</p>
  
  <a href="{{route('customer.edit', $customer->id)}}">Editar</a>
</div>



<a href="{{route('customer.index')}}">voltar</a>

