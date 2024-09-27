@extends('layouts.app')

@section('content')


<div class="card card-default">
    {{-- <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="invoice_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add invoice</a></h3> --}}

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
            
            <th>invoice Date</th>
            <th>Due Date</th>
            <th>Total</th>
            <th>Status</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($invoice as $key=>$invoices)
              
         
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ \Carbon\Carbon::parse($invoices->invoice_date)->format('d F Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($invoices->due_date)->format('d F Y') }}</td>
            
            <td>{{ $invoices->total  }} Taka</td>
            <td>
                
                @if($invoices->paid==1)
                <a class="badge badge-success btn-lg">Paid</a>
            @else
              <a href="/invoice_view/{{$invoices->id}}" class="badge badge-danger btn-lg">UnPaid</a>
            @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>


@endsection