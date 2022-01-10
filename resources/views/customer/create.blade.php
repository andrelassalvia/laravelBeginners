<h1>Add Customer</h1>
    


<form action="{{route('customer.store')}}" method="post">

  @include('customer._partial.form')
  <button type="submit">Save Customer</button>
</form>

<a href="{{route('customer.index')}}">Voltar</a>

    