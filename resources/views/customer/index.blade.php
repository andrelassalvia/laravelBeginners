<h1>Customers</h1>

<button><a href="{{route('customer.create')}}">Add customer</a></button>

@forelse ($customers as $customer)
<div style="margin-bottom: 10px">
  <a href="{{route('customer.show', $customer->id)}}"><strong>{{$customer->name}}</strong></a>
  <p><strong>{{$customer->email}}</strong></p>
</div>



@empty
<p>No customers to show</p>

@endforelse