<h1>Customers</h1>

@forelse ($customers as $customer)
  <p><strong>{{$customer->name}}</strong></p>
  <p><strong>{{$customer->email}}</strong></p>
  <button><a href="{{route('customer.create')}}">Add customer</a></button>
    
@empty
  <p>No customers to show</p>
    
@endforelse