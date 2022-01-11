<h1>Customer Details</h1>

<div style="margin-bottom: 10px">

  <p>{{$customer->name}}</p>
  <p>{{$customer->email}}</p>
  @if ($customer->active === 1)
    <p>active</p>
  @else
    <p>inactive</p>
  @endif
  
  <a href="{{route('customer.edit', $customer->id)}}">Editar</a>

</div>
<form action="{{route('customer.delete', $customer->id)}}" method="post">
  
  @method('DELETE')
  @csrf
  <button type="submit" style="cursor: pointer" >Delete</button>
</form>



<a href="{{route('customer.index')}}">voltar</a>

