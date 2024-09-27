@extends('layouts.app')

@section('content')


<div class="card card-default">
    <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="user_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add USER</a></h3>

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
            
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Smtp</th>
            <th>Pending Lead</th>
            <th>Campaing</th>
            <th>Expiry Date</th>
            <th>Auth</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $key=>$user)
              
         
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $user->name  }}</td>
            <td>{{ $user->email   }}</td>
            <td>{{ $user->phone   }}</td>
            <td>
              @php
              $smtp = App\Models\Smtp::where('user_id',$user->id)->count();
            @endphp
            {{$smtp}}
             
            </td>
            <td>
              @php
              $pending = App\Models\MessageLead::where('user_id',$user->id)->where('status', 0)->count();
            @endphp
            {{$pending}}
            </td>
            <td>
              @php
              $campaing = App\Models\Message::where('user_id',$user->id)->count();
            @endphp
            {{$campaing}}
            </td>
            <td>{{ $user->expiry_date  }}</td>
                        
            <td>
              <a href="/loginAsUser/{{$user->id}}" class="badge badge-primary btn-lg">Login</a>
             
            </td>
            <td>
              <a href="/user_edit/{{$user->id}}" class="badge badge-success btn-lg">Edit</a>
              <a href="/delete_user/{{$user->id}}"  class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>


@endsection