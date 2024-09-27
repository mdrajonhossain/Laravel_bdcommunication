<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>BDCommunication</title>
    
  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('newdash/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('newdash/plugins/simplebar/simplebar.css" rel="stylesheet')}}" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('newdash/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  
  
  
  
  <link href="{{asset('newdash/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
  
  
  
  <link href="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  
  
  
  <link href="{{asset('newdash/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="{{asset('newdash/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('newdash/css/style.css')}}" />

  


  <!-- FAVICON -->
  <link href="{{asset('newdash/images/favicon.png')}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('newdash/plugins/nprogress/nprogress.js')}}"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>
    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/home">
                {{-- <img src="{{asset('newdash/images/logo.png')}}" alt="Mono"> --}}
                <span class="brand-name">BDCommunication</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">

                
              
                  

                
              </ul>

            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="/my_profile" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="https://wa.me/+8801612126669" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-whatsapp"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <style>
                .up {
                    display: inline-block;
                    font-size: 36px;
                    font-weight: bold;
                    color: #333;
                    padding: 5px 10px;
                    border-radius: 5px;
                    background-color: #f0f0f0;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    text-align: center;
                }
                /* This centers the text inside the navbar */
                .mx-auto {
                    flex: 1;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            
                  <div class="mx-auto">
                    {{-- @if ($invoice->paid == 0)
                    <span class="up"> <span class="badge badge-danger">You Have Unpaid Invoice</span> <span class="badge badge-danger">Expair in {{$remainingDays}} Day</span> </span>
                    @else
                    <span class="page-title"><span class="badge badge-square badge-outline-success">Service Expair in {{$remainingDays+1}} Day</span></span>
                    @endif --}}
                    
   
                    
                </div>

              <div class="navbar-right ">
                
                <!-- search form -->


                <ul class="nav navbar-nav">
                  <!-- Offcanvas -->
                  
                  <!-- User Account -->
                  
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

<div class="row">
    <div class="col-xl-6">
      <!-- Basic Example -->
      <div class="card card-default">
        <div class="card-header">
          <h2>User Info</h2>
        </div>
        <div class="card-body">

  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-account" id="basic-addon3"><span class="ml-2">Frist Name</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Frist Name" aria-label="Frist Name" aria-describedby="basic-addon1">
          </div>
  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-account" id="basic-addon3"><span class="ml-2">Last Name</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
          </div>
  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-email" id="basic-addon3"><span class="ml-2">Email</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
          </div>
  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-security" id="basic-addon3"><span class="ml-2">Password</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-phone" id="basic-addon3"><span class="ml-2">Phone</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-calendar" id="basic-addon3"><span class="ml-2">Date Of Birth</span></span>
            </div>
            <input type="date" class="form-control" placeholder="Date Of Birth" aria-label="Date Of Birth" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-check-circle" id="basic-addon3"><span class="ml-2">Religious</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
  
        </div>
      </div>
  
      <!-- Checkbox & Radio Addons -->

  
      <!-- Button with Dropdowns -->
      
    </div>
  
    <div class="col-xl-6">
  
      <!-- Iconic Input Group -->
      <div class="card card-default">
        <div class="card-header">
          <h2>Profession</h2>
  
          
  
  
        </div>
        <div class="card-body">
          
          {{-- <div class="card-body" id="profession-section"> --}}
            <div id="profession-section">
              {{-- <div class="card-body" id="profession-section"> --}}
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span class="ml-2">Company Name</span></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
                </div>
        
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span class="ml-2">Position</span></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Position" aria-label="Position" aria-describedby="basic-addon1">
                </div>
        
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">Started on</span></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Started on" aria-label="Started on" aria-describedby="basic-addon1">
                </div>
        
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">End on</span></span>
                  </div>
                  <input type="text" class="form-control" placeholder="End on" aria-label="End on" aria-describedby="basic-addon1">
                </div>
        
                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                  <input type="checkbox" class="custom-control-input" id="currentWork0">
                  <label class="custom-control-label" for="currentWork0">Currently Work Here</label>
                </div>
              </div>
              <button id="add-profession-btn" class="btn btn-primary">Add More</button>
            </div>
          </div>
        </div>
      </div>

  <div class="row">
    <div class="col-xl-6">
      <!-- Basic Example -->
      <div class="card card-default">
        <div class="card-header">
          <h2>Permanent Address</h2>
        </div>
        <div class="card-body">

  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Address Line</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">House Number</span></span>
            </div>
            <input type="text" class="form-control" placeholder="House Number" aria-label="House Number" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Zip Code</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker-multiple" id="basic-addon3"><span class="ml-2">Divisions</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span class="ml-2">Districts</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Upazilas</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>


          

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Poroshaba</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Poroshaba" aria-label="Poroshaba" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Unions                    </span></span>
            </div>
            <input type="text" class="form-control" placeholder="Unions" aria-label="Unions" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Word                    </span></span>
            </div>
            <input type="text" class="form-control" placeholder="Word" aria-label="Word" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span class="ml-2">Country</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-earth" id="basic-addon3"><span class="ml-2">Citizen</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <a href="javascript:void(0);" id="add-citizen-btn" class="btn btn-primary ml-2">+</a>

        

          </div>
          <div id="citizen-container"></div>
        </div>
      </div>
  
      <!-- Checkbox & Radio Addons -->

  
      <!-- Button with Dropdowns -->
      
    </div>
  


    <div class="col-xl-6">
  
      <!-- Iconic Input Group -->
      <div class="card card-default">
        <div class="card-header">
          <h2>Present Address</h2>
        </div>
        <div class="card-body">


          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-map-marker-multiple" id="basic-addon3">
                <span class="ml-2">Are You Probashi</span>
              </span>
            </div>
            <select class="form-control" id="probashiSelect" onchange="toggleAddressFields()">
              <option value="no" selected>no</option>
              <option value="yes" >yes</option> <!-- Default selection set to "yes" -->
            </select>
          </div>

          <div id="localAddressFields" style="display: none;">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Address Line</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">House Number</span></span>
            </div>
            <input type="text" class="form-control" placeholder="House Number" aria-label="House Number" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Zip Code</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker-multiple" id="basic-addon3"><span class="ml-2">Divisions</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span class="ml-2">Districts</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Upazilas</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>




          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Poroshaba</span></span>
            </div>
            <input type="text" class="form-control" placeholder="Poroshaba" aria-label="Poroshaba" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Unions                    </span></span>
            </div>
            <input type="text" class="form-control" placeholder="Unions" aria-label="Unions" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span class="ml-2">Word                    </span></span>
            </div>
            <input type="text" class="form-control" placeholder="Word" aria-label="Word" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span class="ml-2">Country</span></span>
            </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
        </div>
        <div id="internationalAddressFields" style="display: block;">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-map-marker" id="basic-addon3">
                <span class="ml-2">Address Line</span>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Address Line" aria-label="Address Line">
          </div>
        
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-map-marker" id="basic-addon3">
                <span class="ml-2">House Number</span>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="House Number" aria-label="House Number">
          </div>
        
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-map-marker" id="basic-addon3">
                <span class="ml-2">City</span>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="City" aria-label="City">
          </div>
        
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-map-marker" id="basic-addon3">
                <span class="ml-2">Zip Code</span>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code">
          </div>
        
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-map-marker" id="basic-addon3">
                <span class="ml-2">Country</span>
              </span>
            </div>
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

              
        </div>
       
      </div>
      
    </div>
  </div>
  <script>
    // Ensure correct display on page load
    window.onload = function() {
      toggleAddressFields();
    };
  
    function toggleAddressFields() {
      var probashiSelect = document.getElementById('probashiSelect').value;
      var localFields = document.getElementById('localAddressFields');
      var internationalFields = document.getElementById('internationalAddressFields');
  
      if (probashiSelect === 'no') {
        localFields.style.display = 'block';
        internationalFields.style.display = 'none';
      } else {
        localFields.style.display = 'none';
        internationalFields.style.display = 'block';
      }
    }
  </script>

  <div class="row">
    <div class="col-xl-6">
      <!-- Basic Example -->
      <div class="card card-default">
        <div class="card-header">
          <h2>Education</h2>
        </div>
        <div class="card-body">

          <div id="education-section">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span class="ml-2">College/University Name</span></span>
                </div>
                <input type="text" class="form-control" placeholder="College/University Name" aria-label="College/University Name" aria-describedby="basic-addon1">
              </div>
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-account-circle" id="basic-addon3"><span class="ml-2">Title</span></span>
                </div>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span class="ml-2">Year of graduation</span></span>
                </div>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
  
              <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                <input type="checkbox" class="custom-control-input" id="currentWork${professionCount}">
                <label class="custom-control-label" for="currentWork${professionCount}">Currently Here</label>
              </div>

        </div>
        <button id="add-education-btn" class="btn btn-primary">Add More</button>
      </div>
    </div>
      
    </div>
  


    <div class="col-xl-6">
  
      <!-- Iconic Input Group -->
      <div class="card card-default">
        <div class="card-header">
          <h2>Political Status</h2>
        </div>
        <div class="card-body">
          <div id="political-status-container">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span class="ml-2">Political Party Name</span></span>
                </div>
                <input type="text" class="form-control" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
              </div>
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span class="ml-2">Position</span></span>
                </div>
                <input type="text" class="form-control" placeholder="Position" aria-label="Position" aria-describedby="basic-addon1">
              </div>
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">Started on</span></span>
                </div>
                <input type="text" class="form-control" placeholder="Started on" aria-label="Started on" aria-describedby="basic-addon1">
              </div>
  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">End on</span></span>
                </div>
                <input type="text" class="form-control" placeholder="End on" aria-label="End on" aria-describedby="basic-addon1">
              </div>

              <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheckPrimary" >
                <label class="custom-control-label" for="customCheckPrimary">Curently Here</label>
              </div>
              <br>
              
        </div>
        <a href="javascript:void(0);" id="add-more-btn" class="btn btn-primary ml-2">Add More</a>
      </div>
      
    </div>
    
  </div>
</div>
    
  <a href="" class="btn btn-primary ">Submit</a>
  

  <script>
let professionCount = 1;

document.getElementById('add-profession-btn').addEventListener('click', function() {
  const professionSection = document.getElementById('profession-section');
  const newProfessionFields = `
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span class="ml-2">Company Name</span></span>
      </div>
      <input type="text" class="form-control" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span class="ml-2">Position</span></span>
      </div>
      <input type="text" class="form-control" placeholder="Position" aria-label="Position" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">Started on</span></span>
      </div>
      <input type="text" class="form-control" placeholder="Started on" aria-label="Started on" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">End on</span></span>
      </div>
      <input type="text" class="form-control" placeholder="End on" aria-label="End on" aria-describedby="basic-addon1">
    </div>

    <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
      <input type="checkbox" class="custom-control-input" id="currentWork${professionCount}">
      <label class="custom-control-label" for="currentWork${professionCount}">Currently Work Here</label>
    </div>
  `;

  professionSection.insertAdjacentHTML('beforeend', newProfessionFields);
  professionCount++; // Increment the count for unique IDs
});

document.getElementById('add-education-btn').addEventListener('click', function() {
  const educationSection = document.getElementById('education-section');
  const newEducationFields = `
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-school" id="basic-addon3"><span class="ml-2">College/University Name</span></span>
      </div>
      <input type="text" class="form-control" placeholder="College/University Name" aria-label="College/University Name">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-school" id="basic-addon3"><span class="ml-2">Degree</span></span>
      </div>
      <input type="text" class="form-control" placeholder="Degree" aria-label="Degree">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mdi mdi-calendar" id="basic-addon3"><span class="ml-2">Year of Graduation</span></span>
      </div>
      <input type="text" class="form-control" placeholder="Year of Graduation" aria-label="Year of Graduation">
    </div>
  `;
  educationSection.insertAdjacentHTML('beforeend', newEducationFields);
});

</script>


<script>
  document.getElementById('add-citizen-btn').addEventListener('click', function() {
    // Create a new citizen dropdown
    const newCitizenField = `
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text mdi mdi-earth" id="citizen-addon">
            <span class="ml-2">Citizen</span>
          </span>
        </div>
        <select class="form-control" name="citizen[]">
          <option>Select Citizen</option>
          <option>Citizen 1</option>
          <option>Citizen 2</option>
          <option>Citizen 3</option>
        </select>
      </div>`;
      
    // Append the new citizen field to the container
    document.getElementById('citizen-container').insertAdjacentHTML('beforeend', newCitizenField);
  });
</script>

<script>
  // Function to generate new political status input fields
  document.getElementById('add-more-btn').addEventListener('click', function() {
    const newPoliticalStatus = `
      <div class="political-status-group">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-home-modern">
              <span class="ml-2">Political Party Name</span>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Political Party Name" aria-label="Political Party Name">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-dumbbell">
              <span class="ml-2">Position</span>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Position" aria-label="Position">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-timer-sand">
              <span class="ml-2">Started on</span>
            </span>
          </div>
          <input type="date" class="form-control" aria-label="Started on">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-timer-sand">
              <span class="ml-2">End on</span>
            </span>
          </div>
          <input type="date" class="form-control" aria-label="End on">
        </div>

        <div class="custom-control custom-checkbox d-inline-block mb-3">
          <input type="checkbox" class="custom-control-input" id="currently-here-${Date.now()}">
          <label class="custom-control-label" for="currently-here-${Date.now()}">Currently Here</label>
        </div>
      </div>
    `;
    
    // Append the new political status fields to the container
    document.getElementById('political-status-container').insertAdjacentHTML('beforeend', newPoliticalStatus);
  });
</script>

<footer class="footer mt-auto">
  <div class="copyright bg-white">
    <p>
      &copy; <span id="copy-year"></span> Copyright BDCommunication by <a class="text-primary" href="https://www.BDCommunication.com" target="_blank" >BDCommunication</a>.
    </p>
  </div>
  <script>
      var d = new Date();
      var year = d.getFullYear();
      document.getElementById("copy-year").innerHTML = year;
  </script>
</footer>

</div>
</div>

          <!-- Card Offcanvas -->





          <script src="{{asset('newdash/plugins/jquery/jquery.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/simplebar/simplebar.min.js')}}"></script>
          <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

          
          
          <script src="{{asset('newdash/plugins/apexcharts/apexcharts.js')}}"></script>
          
          
          
          <script src="{{asset('newdash/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
          
          
          
          <script src="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
          <script src="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
          
          
          
          <script src="{{asset('newdash/plugins/daterangepicker/moment.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/daterangepicker/daterangepicker.js')}}"></script>
          <script>
            jQuery(document).ready(function() {
              jQuery('input[name="dateRange"]').daterangepicker({
              autoUpdateInput: false,
              singleDatePicker: true,
              locale: {
                cancelLabel: 'Clear'
              }
            });
              jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
              });
              jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                jQuery(this).val('');
              });
            });
          </script>
          
          
          
          <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
          
          
          
          <script src="{{asset('newdash/plugins/toaster/toastr.min.js')}}"></script>

          
          
          <script src="{{asset('newdash/js/mono.js')}}"></script>
          <script src="{{asset('newdash/js/chart.js')}}"></script>
          <script src="{{asset('newdash/js/map.js')}}"></script>
          <script src="{{asset('newdash/js/custom.js')}}"></script>

          


          <!--  -->


</body>
</html>