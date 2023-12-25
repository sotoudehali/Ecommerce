@component('admin.layouts.content')
<div class="d-flex justify-content-end mb-2">
        <a class="nav-link btn btn-success create-new-button"  href="{{ route('create-role') }}">+ Create New Role</a>
</div>
<div class="col-lg-12 grid-margin stretch-card text-center">
    <div class="card">
      @include('admin.layouts.errors')
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th>Permission name </th>
                <th>Permission Label </th>
                <th> action </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
              <tr>
              <input type="hidden" class="delete_val_id" value="{{ $role->id }}">
                <td> {{ $role->id }} </td>
                <td> {{ $role->name }} </td>
                <td> {{ $role->label }} </td>

                <td> 
                    <a href="" class="btn btn-sm btn-success">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger deletebtn">delete</button>     
                      
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  $("button").click(function(){
    $.ajax({url: "demo_test.txt", success: function(result){
      $("#div1").html(result);
    }});
  });

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
              url:'role-delete/' + delete_id,
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



