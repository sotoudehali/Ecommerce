@component('admin.layouts.content')
<div class="card-body">
    <h4 class="card-title">Create User</h4>
    <div>
     @include('admin.layouts.errors')
    </div>
    <form class="form-inline" method="POST" action="{{ route('update-user',$user->id) }}">
        @csrf
        @method('PUT')
      <label class="sr-only" for="name">User Name</label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="name" value="{{ $user->name }}" id="name"  placeholder="Enter User Name">

      <label class="sr-only" for="email">User Email</label>
      <input type="email" class="form-control mb-2 mr-sm-2" id="email" value="{{ $user->email }}" name="email"  placeholder="Enter User Email">

      <label class="sr-only" for="phone">User Phone</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="phone" value="{{ $user->phone }}" name="phone"  placeholder="Enter User phone">

      <label class="sr-only" for="address">User Address</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="address" value="{{ $user->address }}" name="address"  placeholder="Enter User Address">

      <label class="sr-only" for="password">User Password</label>
      <input type="password" class="form-control mb-2 mr-sm-2" id="password"  name="password"  placeholder="Enter User password">

      <label class="sr-only" for="password_confirmation">User Password Confirmation</label>
      <input type="password" class="form-control mb-2 mr-sm-2" id="password_confirmation"  name="password_confirmation"  placeholder="Enter User Password Confirmation">

      <label class="sr-only" for="verify">User Verification</label>

      <input type="checkbox"
       <?php if ($user->email_verified_at) echo "checked"?> 
      class="form-check-input" id="verify" name="verify">
      <br>

      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
  @endcomponent