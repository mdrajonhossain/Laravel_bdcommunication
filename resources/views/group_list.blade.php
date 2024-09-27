@extends('layouts.app')

@section('content')


<div class="card card-default">
    <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="group_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add Group</a></h3>

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
            <th>Group Name</th>
            <th>Total Lead</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($group_list as $key=>$group)
              
         
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $group->name }}</td>
            @php
            $groupcount = App\Models\EmailList::where('group_id',$group->id)->count();
          @endphp
            <td>{{$groupcount}}</td>
  
            <td>
              <a href="group_edit/{{$group->id}}" class="badge badge-success btn-lg">Edit</a>
              <a href="/group_delete/{{$group->id}}"  class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>


@endsection