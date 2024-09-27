<!DOCTYPE html>

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

                
                  <li class="section-title">
                    @php
                    use Illuminate\Support\Facades\Auth;
                @endphp                      
                             @php
                                 $invoice = App\Models\invoice::where('user_id',auth::user()->id)->first();
                                 $Smtp = App\Models\Smtp::where('status',1)->where('user_id',auth::user()->id)->get();
                                 $user = App\Models\User::where('id',auth::user()->id)->first();
                                 $limit = $Smtp->sum('daily_limit');
                                 $sent = $Smtp->sum('sent');

                                 use Carbon\Carbon;

                                $expiryDate = Carbon::parse($user->expiry_date);
                                $remainingDays = Carbon::now()->diffInDays($expiryDate, false)+ 1;
                             @endphp
                                 
                    Today Limit {{$limit-$sent}}
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                      aria-expanded="false" aria-controls="email">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">email</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="email"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="/Email_list">
                                <span class="nav-text">Email List</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="/group_list">
                                <span class="nav-text">Email Group</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="/from_list">
                                <span class="nav-text">From List</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="/backup">
                                <span class="nav-text">Download Backup</span>
                                
                              </a>
                            </li>



                      </div>
                    </ul>
                  </li>







                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#smtp"
                      aria-expanded="false" aria-controls="smtp">
                      <i class="mdi mdi-server"></i>
                      <span class="nav-text">Smtp Server</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="smtp"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="/Smtp_list">
                                <span class="nav-text">Smtp List</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="/sender_info">
                                <span class="nav-text">Sender Info</span>
                                
                              </a>
                            </li>



                      </div>
                    </ul>
                  </li>



      

                  <li
                   >
                    <a class="sidenav-item-link" href="/campaign">
                      <i class="mdi mdi-message-text"></i>
                      <span class="nav-text">Campaign</span>
                    </a>
                  </li>

                  

                 {{-- @if(auth()->user()->type==1)
                 <li>
                  <a class="sidenav-item-link" href="/invoice_view_admin">
                    <i class="mdi mdi-cash-multiple"></i>
                    <span class="nav-text">invoice 
                     

                   </span>
                  </a>
                </li>

                    
                @else

                <li>
                  <a class="sidenav-item-link" href="/invoice">
                    <i class="mdi mdi-cash-multiple"></i>
                    <span class="nav-text">invoice 

                     @if ($invoice->paid == 0)
                     <span class="badge badge-danger">New</span>
                     @endif
                     

                   </span>
                  </a>
                </li>
                    
                @endif

                @if(auth()->user()->type==1)
                  <li
                   >
                    <a class="sidenav-item-link" href="/Users_list">
                      <i class="mdi mdi-account"></i>
                      <span class="nav-text">User</span>
                    </a>
                  </li>
                  @endif --}}
                  

                
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
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      @if ($user->profile_pic)
                      
                      <img width="200" height="50" src="{{ asset('profileimg/' . $user->profile_pic) }}" class="user-image rounded-circle" alt="User Image" />
                      @else
                      <img src="{{asset('newdash/images/user/u7.jpg')}}" class="user-image rounded-circle" alt="User Image" />
                      @endif
                      

                      <span class="d-none d-lg-inline-block">{{$user->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="/my_profile">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">My Profile</span>
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-link-item" href="/changePassword">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">Change Password</span>
                        </a>
                      </li>
    

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="/out"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>