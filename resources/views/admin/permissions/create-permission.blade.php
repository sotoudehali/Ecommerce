@component('admin.layouts.content')
<div class="card-body">
    <h4 class="card-title">create categories</h4>
    <form class="form-inline" method="POST" action="{{ route('store-permission') }}">
        @csrf
      <label class="sr-only" for="name">Name</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="name"  placeholder="Enter Name">

      <label class="sr-only" for="label">Name</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="label"  placeholder="Enter Label">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
  @endcomponent