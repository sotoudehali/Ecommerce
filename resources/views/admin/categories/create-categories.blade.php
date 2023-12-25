@component('admin.layouts.content')
<div class="card-body">
    <h4 class="card-title">create categories</h4>
    <form class="form-inline" method="POST" action="{{ route('store-categories') }}">
        @csrf
      <label class="sr-only" for="inlineFormInputName2">Name</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="name"  placeholder="Enter Name">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
  @endcomponent