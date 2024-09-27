@extends('layouts.app')

@section('content')


<div class="card card-default">
    <h3 class="card-header"> <a class="mb-1 btn btn-primary" href="campaign_make"> <i class=" mdi mdi-star-outline mr-1"></i> Add Campaign</a></h3>

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
            <th>Campaign Name</th>
            <th>Email Group</th>
            <th>Total Lead</th>
            <th>Sent</th>
            <th>Open</th>
            <th>Status</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($campaign as $key=>$campaigns)
              
         
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{ $campaigns->subject }}</td>
            
            <td>{{ $campaigns->email_group }}</td>
            <td>{{ $campaigns->count }}</td>
            <td>{{ $campaigns->sent }}</td>
            <td>
            @php
              $open = App\Models\MessageLead::where('message_id',$campaigns->id)->sum('open');
            @endphp
            {{$open}}
            </td>
            
            <td>
              <?php
              // Set the current time to Bangladesh time (UTC+6)
              date_default_timezone_set('Asia/Dhaka');
              $now = new DateTime();
              
              // Get the campaign's scheduled time
              $campaignstime = new DateTime($campaigns->time);
              
              // Calculate the time difference
              $timeDifference = $campaignstime->diff($now);
              
              // Check if the SMTP limit was added more than one day ago
              $oneDayAgo = (new DateTime())->sub(new DateInterval('P1D'));

              if ($campaigns->status == 2) {
                echo '<span class="mb-1 btn btn-pill btn-success">Complete</span>';
            }
            // Check if the campaign time is in the past and not complete
            elseif ($campaignstime < $now) {
                echo '<span class="mb-1 btn btn-pill btn-warning">Sending</span>';
            }
            // Otherwise, display the countdown
            else {
                echo '<span style="color: green; font-weight: bold;">Start in ' . $timeDifference->format('%d days, %h hours, %i minutes') . '</span>';
            }

              ?>
          </td>
          <td>
            <a href="/campaign_edit/{{$campaigns->id}}" class="badge badge-warning btn-lg">Edit</a>
            <a href="/campaign_report/{{$campaigns->id}}" class="badge badge-primary btn-lg">Report</a>
            {{-- <a href="/Test_Camp/{{$campaigns->id}}" class="badge badge-info btn-lg">Test Mail</a> --}}
            <a href="/campaign_delete/{{$campaigns->id}}"  class="badge badge-danger btn-lg" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>





@endsection