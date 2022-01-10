<h1>Edit Customer Details</h1>



<form action="{{route('customer.update', $customer->id)}}" method="post">

  @method('PUT')

  @include('customer.form')

  <button type="submit">Save Customer</button>
</form>