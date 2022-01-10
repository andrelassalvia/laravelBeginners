<h1>Customers</h1>

@forelse ($customers as $customer)
<div style="margin-bottom: 10px">
  <a href="{{route('customer.show', $customer->id)}}"><strong>{{$customer->name}}</strong></a>
  <p><strong>{{$customer->email}}</strong></p>
  <button><a href="{{route('customer.create')}}">Add customer</a></button>
</div>


    
@empty
  <p>No customers to show</p>
    
@endforelse