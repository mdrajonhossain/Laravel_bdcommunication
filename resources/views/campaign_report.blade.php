@extends('layouts.app')

@section('content')


<div class="card card-default">
    

    {{-- <div class="card-header">
        
      <h2>Products Inventory</h2>
  
       
  
    </div> --}}



    <div class="alert alert-secondary alert-outlined" role="alert">
      <center>সেন্ডিং শুরু হতে ২-৪ মিনিট সময় লাগতে পারে</center>
    </div>

    <div class="row">

      <!-- First Inbox -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-default bg-info">
          <div class="d-flex p-5 align-items-center flex-column">
            <div class="icon-md bg-white rounded-circle mb-2">
              <i class="mdi mdi-account-plus-outline text-secondary"></i>
            </div>
            <div class="text-center">
              <span class="h2 d-block text-white">{{$totallead}}</span>
              <p class="text-white">Total Email</p>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Second Inbox -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-default bg-success">
          <div class="d-flex p-5 align-items-center flex-column">
            <div class="icon-md bg-white rounded-circle mb-2">
              <i class="mdi mdi-account-plus-outline text-secondary"></i>
            </div>
            <div class="text-center">
              <span class="h2 d-block text-white">{{$totalsent}}</span>
              <p class="text-white">Sent Email</p>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Third Inbox -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-default bg-primary">
          <div class="d-flex p-5 align-items-center flex-column">
            <div class="icon-md bg-white rounded-circle mb-2">
              <i class="mdi mdi-account-plus-outline text-secondary"></i>
            </div>
            <div class="text-center">
              <span class="h2 d-block text-white">{{$totalOpens}}</span>
              <p class="text-white">Open Email</p>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Fourth Inbox -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-default bg-danger">
          <div class="d-flex p-5 align-items-center flex-column">
            <div class="icon-md bg-white rounded-circle mb-2">
              <i class="mdi mdi-account-plus-outline text-secondary"></i>
            </div>
            <div class="text-center">
              <span class="h2 d-block text-white">{{$totalpending}}</span>
              <p class="text-white">Pending Email</p>
            </div>
          </div>
        </div>
      </div>
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
            <th>Company Name</th>
            <th>Website</th>
            <th>Custom Field</th>
            <th>Open</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($report as $key=>$campaigns)
              
         
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $campaigns->email }}</td>
            <td>{{ $campaigns->first_name }}</td>
            <td>{{ $campaigns->last_name }}</td>
            <td>{{ $campaigns->company }}</td>
            <td>{{ $campaigns->website }}</td>
            <td>{{ $campaigns->custom_field }}</td>
            <td>
             
              @if($campaigns->open==1)
              <span class="badge badge-primary btn-lg">Open</span>
          @else
              <span  class="badge badge-danger btn-lg"></span> 
          @endif
            </td>
            <td>
                @if($campaigns->status==1)
                  <span class="badge badge-info btn-lg">Send</span>
              @else
                  <span  class="badge badge-danger btn-lg">Pending</span> 
              @endif
              </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>





@endsection