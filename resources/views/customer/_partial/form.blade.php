

  <div style="margin-bottom: 10px">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{old('name') ?? $customer->name}}">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
  </div>

  <div style="margin-bottom: 10px">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{old('email') ?? $customer->email}}">
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
  </div>

  @csrf

  
