@component('admin.layouts.content')
<div class="card-body">
  @include('admin.layouts.errors')
    <h4 class="card-title">create product</h4>
    <form class="form-inline" method="POST" action="{{ route('store-product') }}" enctype="multipart/form-data">
        @csrf
      <label class="sr-only" for="title">title</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="title"  placeholder="Enter Name">

      <label class="sr-only" for="title">description</label>
      <textarea name="description"  cols="30" rows="5" class="form-control" placeholder="Enter Description"></textarea>

      <label class="sr-only" for="price">price</label>
      <input type="number" class="form-control mb-2 mr-sm-2" name="price"  placeholder="Enter Price">

      <label class="sr-only" for="quantity">Quantity</label>
      <input type="number" class="form-control mb-2 mr-sm-2" name="quantity"  placeholder="Enter Quantity">

      <label class="sr-only" for="discount_price">discount</label>
      <input type="number" class="form-control mb-2 mr-sm-2" name="dicount_price"  placeholder="Enter Quantity">


      <label class="sr-only" for="discount">Categories</label>
      <select name="category_id" class="form-control">
        <option value="" selected="" >add a category </option>
        @foreach ($categories as $category )
        <option value="{{ $category->id }}">{{ $category->name }}</option>

        @endforeach
      </select>
      
      <label class="sr-only" for="discount">Images</label>
      <input type="file" class="form-control" name="image">

      <br>

      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
  @endcomponent