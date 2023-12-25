@component('admin.layouts.content')
<div class="card-body">
    @include('admin.layouts.errors')
    <h4 class="card-title">create categories</h4>
    <form class="form-inline" method="POST" action="{{ route('store-role') }}">
        @csrf
      <label class="sr-only" for="name">Name</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="name"  placeholder="Enter Name">

      <label class="sr-only" for="label">Name</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="label"  placeholder="Enter Label">

      <label class="sr-only" for="label">Permission List</label>
     <select name="permissions[]" id="permissions" class="form-control" multiple>
     @foreach ($permissions as $permission )
         <option value="{{$permission->id}}">{{$permission->name}}-{{$permission->label}}</option>
     @endforeach
    </select>
    <br>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
  @endcomponent