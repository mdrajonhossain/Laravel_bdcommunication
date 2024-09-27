@extends('layouts.app')

@section('content')


<!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            <div class="content">                
                    <!-- Top Statistics -->
                    <div class="row">
  
                      <!-- First Inbox -->
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-default bg-primary">
                          <div class="d-flex p-5 align-items-center flex-column">
                            <div class="icon-md bg-white rounded-circle mb-2">
                              <i class="mdi mdi-account-plus-outline text-secondary"></i>
                            </div>
                            <div class="text-center">
                              <span class="h2 d-block text-white">{{$EmailList}}</span>
                              <p class="text-white">Total Lead</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <!-- Second Inbox -->
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-default bg-success">
                          <div class="d-flex p-5 align-items-center flex-column">
                            <div class="icon-md bg-white rounded-circle mb-2">
                              <i class="mdi mdi-table-edit text-success"></i>
                            </div>
                            <div class="text-center">
                              <span class="h2 d-block text-white">{{$lastopen}}</span>
                              <p class="text-white">Last Camping Open Rate</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <!-- Third Inbox -->
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-default bg-secondary">
                          <div class="d-flex p-5 align-items-center flex-column">
                            <div class="icon-md bg-white rounded-circle mb-2">
                              <i class="mdi mdi-content-save-edit-outline text-primary"></i>
                            </div>
                            <div class="text-center">
                              <span class="h2 d-block text-white">{{$pendingLead}}</span>
                              <p class="text-white">Total Pending Lead</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <!-- Fourth Inbox -->
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-default bg-info">
                          <div class="d-flex p-5 align-items-center flex-column">
                            <div class="icon-md bg-white rounded-circle mb-2">
                              <i class="mdi mdi-bell text-info"></i>
                            </div>
                            <div class="text-center">
                              <span class="h2 d-block text-white">{{$invoice}}</span>
                              <p class="text-white">Unpaid invoice</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
  
  
                  <div class="row">
                    <div class="col-xl-12">
                      
                      <!-- Income and Express -->
                      <div class="card card-default">
                        <div class="card-header">
                          <h2>Chart</h2>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" data-display="static">
                            </a>
  
                            
                          </div>
  
                        </div>
                        <div class="card-body">
                          <div>
                            <canvas id="myChart"></canvas>
                          </div>
                        </div>
  
                      </div>
  
  
                    </div>
                    
                  </div>
  
  
                  
                  <!-- Table Product -->
  

                  
                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                  
                  <script>
                    const ctx = document.getElementById('myChart');
                  
                    new Chart(ctx, {
                      type: 'bar',
                      data: {
                        labels: ['Total Leads', 'Total Smtp', 'Total Campaing'],
                        datasets: [{
                          label: '# of Votes',
                          data: [{{$EmailList}}, {{$Smtp}}, {{$Message}}],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('myChart');
                  
                    new Chart(ctx, {
                      type: 'bar',
                      data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                          label: '# of Votes',
                          data: [12, 19, 3, 5, 2, 3],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
                <!-- Stock Modal -->
               
  </div>
            
          </div>
    
    
    
   


@endsection
