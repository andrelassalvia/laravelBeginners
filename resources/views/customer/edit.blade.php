<h1>Edit Cuatomer Details</h1>


<form action="{{route('customer.update', $customer->id)}}" method="post">

  @method('PUT')

  <div style="margin-bottom: 10px">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{$customer->name}}">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
  </div>

  <div style="margin-bottom: 10px">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$customer->email}}">
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
  </div>

  @csrf

  <button type="submit">Save Customer</button>
</form>