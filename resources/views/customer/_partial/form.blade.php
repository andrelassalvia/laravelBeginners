

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
  <div style="margin-bottom: 10px">
    <label for="active">Active</label>
    <select name="active" id="active">
      <option value="1">active</option>
      <option value="0">inactive</option>
    </select>
  </div>

  @csrf

  
