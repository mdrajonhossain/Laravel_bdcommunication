@extends('layouts.app')

@section('content')


<div class="card card-default">
  <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="Email_list_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add Email List</a></h3>
    {{-- <div class="card-header">
      <h2>Products Inventory</h2>
  
      
  
    </div> --}}
    <div class="mail_delete text-right">
      <div><a class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" href="Email_list_delall"> All Delete</a></div>
      {{-- <div><a class="badge badge-primary btn-lg"  href="Smtp_Sent"> Smtp_Sent</a></div> --}}
  </div>
    <div class="card-body">
      <div class="collapse" id="collapse-data-tables">
       
      </div>



      <table id="my" class="table table-hover table-product" style="width:100%; color: black;">
        <thead>
          <tr>
            
            
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Group</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Email_list as $key=>$Email_lists)
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $Email_lists->email }}</td>
            <td>{{ $Email_lists->first_name }}</td>
            <td>{{ $Email_lists->last_name }}</td>

            <td>
              @php
                $group = App\Models\Group::find($Email_lists->group_id);
              @endphp
              {{$group->name}}
            </td>
            
            <td>
              <a href="/Email_edit/{{$Email_lists->id}}" class="badge badge-warning btn-lg">Edit</a>
              
              <a href="/Email_del/{{$Email_lists->id}}"  class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#productsTable').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax": {
              "url": "{{ route('Email_list') }}", // Adjust route if necessary
              "type": "GET"
          },
          "pageLength": 100
      });
    });
  </script>
@endsection