@component('admin.layouts.content')
<div class="d-flex justify-content-end mb-2">
        <a class="nav-link btn btn-success create-new-button"  href="{{ route('create-user') }}">+ Create New User</a>
</div>
<div class="col-lg-12 grid-margin stretch-card text-center">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Address </th>
                <th> Email Status </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
             <input type="hidden" class="delete_val_id" value="{{ $user->id }}">

                <td> {{ $user->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->phone }} </td>
                <td> {{ $user->address }} </td>
                <td> 
                    @if($user->email_verified_at)
                    <div class="badge badge-success">Active</div>
                    @else
                    <div class="badge badge-danger">InActive</div>
                    @endif
                </td>
                <td> 
                    <a href="{{ route('edit-user',$user->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger deletebtn">delete</button> 
                    @if($user->isStaff())
                    <a href="#" class="btn btn-sm btn-info"> Access </a>    

                    @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  @section('scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.deletebtn').click(function(e){
      e.preventDefault();
      var delete_id= $(this).closest("tr").find('.delete_val_id').val();
     swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
         var data={
            "_token" : $('input[name=_token]').val(),
            "id" : delete_id
         }
        $.ajax({
            type:"DELETE",
            url:'user-delete/' + delete_id,
            data: data,
            success:function(response){
                swal(response.status , {
                    icon: "success",
                  })
                  .then((result)=>{
                    location.reload();
                  })
            }
        });
      });
    });
  });
</script>
  @endsection
@endcomponent



