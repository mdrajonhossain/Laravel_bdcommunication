@extends('layouts.app')

@section('content')


<div class="card card-default">
    <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="from_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add From</a></h3>

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
            <th>From Name</th>
            <th>Group Name</th>
            <th>People</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($from_list as $key=>$from)
              
         
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $from->name }}</td>
            @php
            $groupname = App\Models\group::where('id',$from->group_id)->first();
          @endphp
            <td>{{$groupname->name}}</td>
            <td>{{$from->count}}</td>
            <td>
              <a href="/from/{{$from->id}}" class="badge badge-success btn-lg">View</a>
              <a href="/group_delete/{{$from->id}}"  class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>


@endsection