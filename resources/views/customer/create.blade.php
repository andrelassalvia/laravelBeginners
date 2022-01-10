<h1>Add Customer</h1>
    


<form action="{{route('customer.store')}}" method="post">

  @include('customer.form')
</form>

<a href="{{route('customer.index')}}">Voltar</a>

    