<form action="/updateCompany/{{$show->id}}" method="POST">
    @csrf
    <div class="form-group">
      <label>Company name</label>
      <input type="text" name="company" class="form-control" value="{{$show->company}}">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="{{$show->address}}">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="{{$show->phone}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{$show->email}}">
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{$show->name}}">
    </div>
    <div class="form-group">
        <label>Surname</label>
        <input type="text" name="surname" class="form-control" value="{{$show->surname}}">
    </div>
    <div class="form-group">
        <label>Image Link</label>
        <input type="text" name="src" class="form-control" value="{{$show->src}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>