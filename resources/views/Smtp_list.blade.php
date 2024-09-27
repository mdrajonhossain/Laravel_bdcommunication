@extends('layouts.app')

@section('content')


<div class="card card-default">
  <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="Smtp_list_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add SMTP</a></h3>
    {{-- <div class="card-header">
      <h2>Products Inventory</h2>
  
      
  
    </div> --}}
    <div class="card-body">
      <div class="collapse" id="collapse-data-tables">
       
      </div>
      <table id="productsTable" class="table table-hover table-product" style="width:100%; color: black;">
        <thead>
          <tr>
            
            
            <th>ID</th>
            <th>Hostname</th>
            <th>Port</th>
            <th>Email</th>
            <th>Password</th>
            <th>Daily Limit</th>
            <th>Sent Today</th>
            <th>Reset Limit</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Smtp_list as $key=>$Smtp_lists)
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $Smtp_lists->hostname }}</td>
            <td>{{ $Smtp_lists->port }}</td>
            <td>{{ $Smtp_lists->email }}</td>
            <td>******</td>
            <td>{{ $Smtp_lists->daily_limit }}</td>
            <td>{{ $Smtp_lists->sent }}</td>

            <td>
              <?php
              
                  $twhour = Carbon\Carbon::now()->subHours(23);
                  $smtplimit = $Smtp_lists->updated_at;
                  $timeDifference = $smtplimit->diff($twhour);
                  
                  if ($smtplimit < $twhour) {
                      echo "Limit Added";
                      
                  } else {
                      echo  $timeDifference->format('%h hours, %i minutes');
                  }
              ?>
          </td>

            <td>
              @if($Smtp_lists->status==1)
              <a href="/Smtp_status/{{$Smtp_lists->id}}" class="badge badge-success btn-lg">Active</a>
          @else
            <a href="/Smtp_status/{{$Smtp_lists->id}}" class="badge badge-danger btn-lg">InActive</a>
          @endif
            </td>
           
            <td>
              <a href="/Smtp_edit/{{$Smtp_lists->id}}" class="badge badge-warning btn-lg">Edit</a>
              <a href="/Test_Smtp/{{$Smtp_lists->id}}" class="badge badge-info btn-lg">Test Smtp</a>
              <a href="/Smtp_delete/{{$Smtp_lists->id}}"  class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>


@endsection