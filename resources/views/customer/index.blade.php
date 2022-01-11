<h1 >Customers</h1>



<button style="margin-bottom: 5px"><a href="{{route('customer.create')}}">Add customer</a></button>
<button style="margin-bottom: 5px"><a href="/customers?active=1">Active</a></button>
<button style="margin-bottom: 20px"><a href="/customers?active=0">Inactive</a></button>


@forelse ($customers as $customer)
<div style="margin-bottom: 10px">
  <a href="{{route('customer.show', $customer->id)}}"><strong>{{$customer->name}}</strong></a>
  <p><strong>{{$customer->email}}</strong></p>

  @if ($customer->active === 1)
    <p>active</p>
  @else
    <p>inactive</p>
  @endif
</div>

@empty
<p>No customers to show</p>

@endforelse