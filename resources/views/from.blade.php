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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{asset('newdash/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}"
        rel="stylesheet" />
    <link href="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{asset('newdash/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{asset('newdash/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{asset('newdash/css/style.css')}}" />
    <!-- FAVICON -->
    <link href="{{asset('newdash/images/favicon.png')}}" rel="shortcut icon" />
    <script src="{{asset('newdash/plugins/nprogress/nprogress.js')}}"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
    NProgress.configure({
        showSpinner: false
    });
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
                                <a href="/my_profile" data-toggle="tooltip" title="Profile settings"><i
                                        class="mdi mdi-settings"></i></a>
                            </li>
                            <li>
                                <a href="https://wa.me/+8801612126669" data-toggle="tooltip" title="No chat messages"><i
                                        class="mdi mdi-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

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
    <span class="up"> <span class="badge badge-danger">You Have Unpaid Invoice</span> <span class="badge badge-danger">Expair in {{$remainingDays}}
                        Day</span> </span>
                        @else
                        <span class="page-title"><span class="badge badge-square badge-outline-success">Service Expair
                                in {{$remainingDays+1}} Day</span></span>
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

            <!-- userinfo + Proffesinal start -->
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
                                    <span class="input-group-text mdi mdi-account" id="basic-addon3"><span
                                            class="ml-2">Frist Name</span></span>
                                </div>
                                <input type="text" class="form-control" id="first_name" placeholder="Frist Name"
                                    aria-label="Frist Name" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-account" id="basic-addon3"><span
                                            class="ml-2">Last Name</span></span>
                                </div>
                                <input type="text" class="form-control" id="last_name" placeholder="Last Name"
                                    aria-label="Last Name" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-email" id="basic-addon3"><span
                                            class="ml-2">Email</span></span>
                                </div>
                                <input type="text" class="form-control" id="email" placeholder="Email"
                                    aria-label="Email" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-security" id="basic-addon3"><span
                                            class="ml-2">Password</span></span>
                                </div>
                                <input type="text" class="form-control" id="password" placeholder="Password"
                                    aria-label="Password" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-phone" id="basic-addon3"><span
                                            class="ml-2">Phone</span></span>
                                </div>
                                <input type="text" class="form-control" id="phone" placeholder="Phone"
                                    aria-label="Phone" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-calendar" id="basic-addon3"><span
                                            class="ml-2">Date Of Birth</span></span>
                                </div>
                                <input type="date" class="form-control" id="date_birth" placeholder="Date Of Birth"
                                    aria-label="Date Of Birth" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-check-circle" id="basic-addon3"><span
                                            class="ml-2">Religious</span></span>
                                </div>
                                <select class="form-control" id="religious">
                                    <option>Select Religious...</option>
                                    <option value="islam">Islam</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="christian">Christian</option>
                                    <option value="buddhist">Buddhist</option>
                                </select>
                            </div>

                        </div>
                    </div>
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
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Company Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" name="company_name[]"
                                        placeholder="Company Name" aria-label="Company Name"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" name="position[]" class="form-control" placeholder="Position"
                                        aria-label="Position" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" name="started_on[]" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" name="end_one[]" class="form-control" placeholder="End on"
                                        aria-label="End on" aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" name="currently[]" class="custom-control-input"
                                        id="currentWork0">
                                    <label class="custom-control-label" for="currentWork0">Currently Work Here</label>
                                </div>
                            </div>
                            <button id="add-profession-btn" class="btn btn-primary">Add More</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            let professionCount = 1;

            document.getElementById('add-profession-btn').addEventListener('click', function() {
                const professionSection = document.getElementById('profession-section');
                const newProfessionFields = `<div class="input-group mb-3" style="border-top: 1px solid grey;">
                            <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span class="ml-2">Company Name</span></span>
                            </div>
                            <input type="text" class="form-control" name="company_name[]" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span class="ml-2">Position</span></span>
                            </div>
                            <input type="text" class="form-control" name="position[]" placeholder="Position" aria-label="Position" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">Started on</span></span>
                            </div>
                            <input type="text" class="form-control" name="started_on[]" placeholder="Started on" aria-label="Started on" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span class="ml-2">End on</span></span>
                            </div>
                            <input type="text" class="form-control" name="end_one[]" placeholder="End on" aria-label="End on" aria-describedby="basic-addon1">
                            </div>

                            <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                            <input type="checkbox" name="currently[]" class="custom-control-input" id="currentWork${professionCount}">
                            <label class="custom-control-label" for="currentWork${professionCount}">Currently Work Here</label>
                            </div>`;

                professionSection.insertAdjacentHTML('beforeend', newProfessionFields);
                professionCount++;
            });
            </script>
            <!-- userinfo + Proffesinal end -->



            <!-- present_permanentaddress start -->
            <div class="row">
                <div class="col-xl-6">
                    <!-- Basic Example -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Permanent Address</h2>
                        </div>
                        <div class="card-body permanent">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Address Line</span></span>
                                </div>
                                <input type="text" id="addressline" class="form-control" placeholder="Address"
                                    aria-label="Address" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">House Number</span></span>
                                </div>
                                <input type="text" id="house_number" class="form-control" placeholder="House Number"
                                    aria-label="House Number" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Zip Code</span></span>
                                </div>
                                <input type="text" id="zip_code" class="form-control" placeholder="Zip Code"
                                    aria-label="Zip Code" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker-multiple" id="basic-addon3"><span
                                            class="ml-2">Divisions</span></span>
                                </div>
                                <select class="form-control" id="devision">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span
                                            class="ml-2">Districts</span></span>
                                </div>
                                <select class="form-control" id="districts">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Upazilas</span></span>
                                </div>
                                <select class="form-control" id="upazilas">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Poroshaba</span></span>
                                </div>
                                <input type="text" id="poroshaba" class="form-control" placeholder="Poroshaba"
                                    aria-label="Poroshaba" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Unions </span></span>
                                </div>
                                <input type="text" id="unions" class="form-control" placeholder="Unions"
                                    aria-label="Unions" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Word</span></span>
                                </div>
                                <input type="text" id="word" class="form-control" placeholder="Word" aria-label="Word"
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span
                                            class="ml-2">Country</span></span>
                                </div>
                                <select class="form-control" id="country">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-earth" id="basic-addon3"><span
                                            class="ml-2">Citizen</span></span>
                                </div>
                                <select class="form-control" id="citizen">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-xl-6">
                    <!-- Iconic Input Group -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Present Address</h2>
                        </div>
                        <div class="card-body present">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Address Line</span></span>
                                </div>
                                <input type="text" id="addressline" class="form-control" placeholder="Address"
                                    aria-label="Address" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">House Number</span></span>
                                </div>
                                <input type="text" id="house_number" class="form-control" placeholder="House Number"
                                    aria-label="House Number" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Zip Code</span></span>
                                </div>
                                <input type="text" id="zip_code" class="form-control" placeholder="Zip Code"
                                    aria-label="Zip Code" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker-multiple" id="basic-addon3"><span
                                            class="ml-2">Divisions</span></span>
                                </div>
                                <select class="form-control" id="devision">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span
                                            class="ml-2">Districts</span></span>
                                </div>
                                <select class="form-control" id="districts">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Upazilas</span></span>
                                </div>
                                <select class="form-control" id="upazilas">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Poroshaba</span></span>
                                </div>
                                <input type="text" id="poroshaba" class="form-control" placeholder="Poroshaba"
                                    aria-label="Poroshaba" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Unions </span></span>
                                </div>
                                <input type="text" id="unions" class="form-control" placeholder="Unions"
                                    aria-label="Unions" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker" id="basic-addon3"><span
                                            class="ml-2">Word</span></span>
                                </div>
                                <input type="text" id="word" class="form-control" placeholder="Word" aria-label="Word"
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span
                                            class="ml-2">Country</span></span>
                                </div>
                                <select class="form-control" id="country">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mdi mdi-earth" id="basic-addon3"><span
                                            class="ml-2">Citizen</span></span>
                                </div>
                                <select class="form-control" id="citizen">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- present_permanentaddress end -->


            <!-- education+Political Status start -->
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
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">School/College/University Name</span></span>
                                    </div>
                                    <input type="text" name="course_name[]" class="form-control"
                                        placeholder="School/College/University Name"
                                        aria-label="College/University Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-account-circle" id="basic-addon3"><span
                                                class="ml-2">Title</span></span>
                                    </div>
                                    <select class="form-control" name="title[]">
                                        <option value="ssc">SSC</option>
                                        <option value="shc">HSC</option>
                                        <option value="hon's">Hon's</option>
                                        <option value="masters">Master's</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span
                                                class="ml-2">Year of graduation</span></span>
                                    </div>
                                    <select class="form-control" name="passingyear[]">
                                        <option value="2020">1</option>
                                        <option value="2020">2</option>
                                        <option value="2020">3</option>
                                        <option value="2020">4</option>
                                        <option value="2020">5</option>
                                    </select>
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" name="running[]" id="running[]">
                                    <label class="custom-control-label" for="running[]">Currently
                                        Here</label>
                                </div>

                            </div>
                            <button id="add-education-btn" class="btn btn-primary">Add More</button>
                        </div>
                    </div>
                </div>
                <script>
                let educationCount = 1;
                document.getElementById('add-education-btn').addEventListener('click', function() {
                    const educationSection = document.getElementById('education-section');
                    const newEducationFields = `<div class="input-group mb-3" style="border-top: 1px solid grey;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">School/College/University Name</span></span>
                                    </div>
                                    <input type="text" name="course_name[]" class="form-control" placeholder="School/College/University Name"
                                        aria-label="College/University Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-account-circle" id="basic-addon3"><span
                                                class="ml-2">Title</span></span>
                                    </div>
                                    <select class="form-control" name="title[]">
                                        <option value="ssc">SSC</option>
                                        <option value="shc">HSC</option>
                                        <option value="hon's">Hon's</option>
                                        <option value="masters">Master's</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-map-marker-radius" id="basic-addon3"><span
                                                class="ml-2">Year of graduation</span></span>
                                    </div>
                                    <select class="form-control" name="passingyear[]">
                                        <option value="2020">1</option>
                                        <option value="2020">2</option>
                                        <option value="2020">3</option>
                                        <option value="2020">4</option>
                                        <option value="2020">5</option>
                                    </select>
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" name="running[]" id="Currently${educationCount}">
                                    <label class="custom-control-label" for="Currently${educationCount}">Currently
                                        Here</label>
                                </div>`;

                    educationSection.insertAdjacentHTML('beforeend', newEducationFields);
                    educationCount++;
                });
                </script>




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
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Company Name"
                                        aria-label="Company Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Position" aria-label="Position"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="politicalcheck[]">
                                    <label class="custom-control-label" for="politicalcheck[]">Curently Here</label>
                                </div>
                                <br>

                            </div>
                            <a href="javascript:void(0);" id="politicalStatus_addMore" class="btn btn-primary ml-2">Add
                                More</a>
                        </div>
                    </div>

                </div>
            </div>
            <script>
            let politicalStatuscheck = 1;
            document.getElementById('politicalStatus_addMore').addEventListener('click', function() {
                const newPoliticalStatus = `<div class="political-status-group" style="border-top: 1px solid grey;">
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
                        <input type="checkbox" class="custom-control-input" id="currently${politicalStatuscheck}">
                        <label class="custom-control-label" for="currently${politicalStatuscheck}">Currently Here</label>
                        </div>
                    </div>`;
                document.getElementById('political-status-container').insertAdjacentHTML('beforeend', newPoliticalStatus);
                politicalStatuscheck++;
            });
            </script>
            <!-- education+Political Status end -->



            <!-- Bangladesh Political Status + Business start -->
            <div class="row">
                <div class="col-xl-6">
                    <!-- Basic Example -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Bangladesh Political Status</h2>
                        </div>
                        <div class="card-body">

                            <div id="bangladeshpoliticalstatus">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Political Party Name"
                                        aria-label="College/University Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Position" aria-label="Position"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="bangladeshpoliticalchecke[]">
                                    <label class="custom-control-label" for="bangladeshpoliticalchecke[]">Curently
                                        Here</label>
                                </div>
                                <br>

                            </div>
                            <button id="add-bangladesh_political_status-btn" class="btn btn-primary">Add More</button>
                        </div>
                    </div>
                </div>
                <script>
                let bangladeshpoliticalchecke = 1;
                document.getElementById('add-bangladesh_political_status-btn').addEventListener('click', function() {
                    const bangladeshpoliticalstatus = document.getElementById('bangladeshpoliticalstatus');
                    const bangladeshpoliticalstatusfield = `<div id="bangladeshpoliticalstatus" style="border-top: 1px solid grey;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Political Party Name"
                                        aria-label="College/University Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Position" aria-label="Position"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="bangladeshpoliticalchecke${bangladeshpoliticalchecke}">
                                    <label class="custom-control-label" for="bangladeshpoliticalchecke${bangladeshpoliticalchecke}">Curently Here</label>
                                </div>
                            </div>`;
                    bangladeshpoliticalstatus.insertAdjacentHTML('beforeend', bangladeshpoliticalstatusfield);
                    bangladeshpoliticalchecke++;
                });
                </script>


                <div class="col-xl-6">
                    <!-- Iconic Input Group -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Business</h2>
                        </div>
                        <div class="card-body">
                            <div id="bussiness_containt">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Business Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Business Name"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Catagory</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Catagory" aria-label="Catagory"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Position" aria-label="Position"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="bussinescheckb[]">
                                    <label class="custom-control-label" for="bussinescheckb[]">Currently
                                        Here</label>
                                </div>
                                <br>

                            </div>
                            <a href="javascript:void(0);" id="bussiness_add_More" class="btn btn-primary ml-2">Add
                                More</a>
                        </div>
                    </div>

                </div>
            </div>
            <script>
            let bussinescheckb = 1;
            document.getElementById('bussiness_add_More').addEventListener('click', function() {

                const bussiness_containt = document.getElementById('bussiness_containt');

                const bussiness = `<div id="political-status-container" style="border-top: 1px solid grey;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Business Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Business Name"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Catagory</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Catagory" aria-label="Catagory"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Position" aria-label="Position"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="bussinescheckb${bussinescheckb}">
                                    <label class="custom-control-label" for="bussinescheckb${bussinescheckb}">Currently Here</label>
                                </div>`;
                document.getElementById('bussiness_containt').insertAdjacentHTML('beforeend', bussiness);
                bussinescheckb++;
            });
            </script>
            <!-- Bangladesh Political Status + Business end -->




            <!-- Probashi Political Status + Living status start -->
            <div class="row">
                <div class="col-xl-6">
                    <!-- Basic Example -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Probashi Political Status</h2>
                        </div>
                        <div class="card-body">

                            <div id="probashi_political_status">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" name="political_party_name[]" class="form-control"
                                        placeholder="Political Party Name" aria-label="Political Party Name"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" name="position[]" class="form-control" placeholder="Position"
                                        aria-label="Position" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" name="started_on[]" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" name="end_on[]" class="form-control" placeholder="End on"
                                        aria-label="End on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Country</span></span>
                                    </div>
                                    <input type="text" name="country[]" class="form-control" placeholder="Country"
                                        aria-label="End on" aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" name="courrently_political_osition[]"
                                        class="custom-control-input" id="courrently_political_osition">
                                    <label class="custom-control-label" for="courrently_political_osition">Courrently
                                        Political Position</label>
                                </div>
                                <br>

                            </div>
                            <button id="add-probashi_political_status-btn" class="btn btn-primary">Add More</button>
                        </div>
                    </div>
                </div>
                <script>
                let probashiPoliticalcheck = 1;
                document.getElementById('add-probashi_political_status-btn').addEventListener('click', function() {
                    const probashi_political_status = document.getElementById('probashi_political_status');
                    const probashi_political_status_field = `<div class="input-group mb-3" style="border-top: 1px solid grey;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" name="political_party_name[]" class="form-control" placeholder="Political Party Name"
                                        aria-label="Political Party Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Position</span></span>
                                    </div>
                                    <input type="text" name="position[]" class="form-control" placeholder="Position" aria-label="Position"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Started on</span></span>
                                    </div>
                                    <input type="text" name="started_on[]" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" name="end_on[]" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Country</span></span>
                                    </div>
                                    <input type="text" name="country[]" class="form-control" placeholder="Country" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" name="courrently_political_osition[]" class="custom-control-input" id="courrently${probashiPoliticalcheck}">
                                    <label class="custom-control-label" for="courrently${probashiPoliticalcheck}">Courrently Political Position</label>
                                </div>`;
                    probashi_political_status.insertAdjacentHTML('beforeend', probashi_political_status_field);
                    probashiPoliticalcheck++;
                });
                </script>


                <div class="col-xl-6">



                    <div class="card card-default">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="probashiCheckbox"
                                    onchange="probashiCheckbox()">
                                <label class="form-check-label" for="probashiCheckbox">Add Probashi</label>
                            </div>
                        </div>
                    </div>
                    <script>
                    function probashiCheckbox() {
                        var checkbox = document.getElementById("probashiCheckbox");
                        var content = document.getElementById("probashi");
                        if (checkbox.checked) {
                            content.style.display = "block";
                        } else {
                            content.style.display = "none";
                        }
                    }
                    </script>

                    <!-- Iconic Input Group -->
                    <div class="card card-default" id="probashi" style="display: none;">


                        <div class="card-body">
                            <div id="living_containt">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Address Line</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Address Line"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">House Number</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="House Number"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">City</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="City"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Zip code</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Zip code"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Country</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Country"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>




                        <div class="card-header">
                            <h2>Living status</h2>
                        </div>
                        <div class="card-body">
                            <div id="Citizen_containt">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Citizen</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Citizen"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <a href="javascript:void(0);" id="Citizen_add_More" class="btn btn-primary ml-2">Add
                                More</a>
                        </div>                        
                        <script>
                        document.getElementById('Citizen_add_More').addEventListener('click', function() {
                            const Citizen_containt = document.getElementById('Citizen_containt');
                            const Citizen_containt_field = ` <div id="Citizen_containt" style="border-top: 1px solid grey;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-home-modern" id="basic-addon3">
                                            <span class="ml-2">Citizen</span></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Citizen"
                                            aria-label="Business Name" aria-describedby="basic-addon1">
                                    </div>
                                </div>`;
                                Citizen_containt.insertAdjacentHTML('beforeend', Citizen_containt_field);
                        });
                        </script>



                        <div class="card-body">
                            <div id="visa_containt">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Visa</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Visa"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <a href="javascript:void(0);" id="visa_add_More" class="btn btn-primary ml-2">Add
                                More</a>
                        </div>
                        <script>
                        document.getElementById('visa_add_More').addEventListener('click', function() {
                            const visa_containt = document.getElementById('visa_containt');
                            const visa_containt_field = `<div id="visa_containt" style="border-top: 1px solid grey;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Visa</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Visa"
                                        aria-label="Business Name" aria-describedby="basic-addon1">
                                </div>
                            </div>`;
                            visa_containt.insertAdjacentHTML('beforeend', visa_containt_field);
                        });
                        </script>




                        <div class="card-header">
                            <h2>Probashi Political Status</h2>
                        </div>
                        <div class="card-body">
                            <div id="probashi_political_statusaa">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Political Party Name"
                                        aria-label="Political Party Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Started on </span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Country</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Country" aria-label="Country"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="Probashipoliticalstatus[]">
                                    <label class="custom-control-label" for="Probashipoliticalstatus[]">Currently
                                        Here</label>
                                </div>
                                <br>

                            </div>
                            <a href="javascript:void(0);" id="Probashi_political_status_add_More" class="btn btn-primary ml-2">Add
                                More</a>
                        </div>
                    </div>

                </div>
            </div>
            <script>
                let Probashipoliticalstatus = 1;
            document.getElementById('Probashi_political_status_add_More').addEventListener('click', function() {
                const probashi_political_statusaa = document.getElementById('probashi_political_statusaa');
                const probashipoliticalstatusdiv = `<div id="living_containt" style="border-top: 1px solid grey;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-home-modern" id="basic-addon3"><span
                                                class="ml-2">Political Party Name</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Political Party Name"
                                        aria-label="Political Party Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">Started on </span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Started on"
                                        aria-label="Started on" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-dumbbell" id="basic-addon3"><span
                                                class="ml-2">End on</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="End on" aria-label="End on"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-timer-sand" id="basic-addon3"><span
                                                class="ml-2">Country</span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Country" aria-label="Country"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="Probashipoliticalstatus${Probashipoliticalstatus}">
                                    <label class="custom-control-label" for="Probashipoliticalstatus${Probashipoliticalstatus}">Currently
                                        Here</label>
                                </div>`;
                        probashi_political_statusaa.insertAdjacentHTML('beforeend', probashipoliticalstatusdiv);
                        Probashipoliticalstatus++;
            });
            </script>
            <!-- Probashi Political Status + Living status end -->





            <a class="btn btn-primary" id="submitbtn">Submit</a>




            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year"></span> Copyright BDCommunication by <a class="text-primary"
                            href="https://www.BDCommunication.com" target="_blank">BDCommunication</a>.
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="{{asset('newdash/plugins/toaster/toastr.min.js')}}"></script>
    <script src="{{asset('newdash/js/mono.js')}}"></script>
    <script src="{{asset('newdash/js/chart.js')}}"></script>
    <script src="{{asset('newdash/js/map.js')}}"></script>
    <script src="{{asset('newdash/js/custom.js')}}"></script>

    <script>
    $('#submitbtn').on('click', function() {

        var Userinfo = {
            "firstName": $('#first_name').val(),
            "lastName": $('#last_name').val(),
            "email": $('#email').val(),
            "phone": $('#phone').val(),
            "password": $('#password').val(),
            "dateOfBirth": $('#date_birth').val(),
            "religious": $('#religious').val()
        }

        var profession = {
            "companyName": $("input[name='company_name[]']").map(function() {
                return $(this).val();
            }).get(),
            "position": $("input[name='position[]']").map(function() {
                return $(this).val();
            }).get(),
            "started_on": $("input[name='started_on[]']").map(function() {
                return $(this).val();
            }).get(),
            "end_one": $("input[name='end_one[]']").map(function() {
                return $(this).val();
            }).get(),
            "currently": $("input[name='currently[]']").map(function() {
                return $(this).val();
            }).get()
        };
        var info = [];
        for (var i = 0; i < profession.companyName.length; i++) {
            info.push({
                companyName: profession.companyName[i],
                position: profession.position[i],
                started_on: profession.started_on[i],
                end_one: profession.end_one[i],
                currently: profession.currently[i]
            });
        }
        console.log(info);
        

        var parmanentAddress = {
            "addressline": $('.permanent #addressline').val(),
            "house_number": $('.permanent #house_number').val(),
            "zip_code": $('.permanent #zip_code').val(),
            "devision": $('.permanent #devision').val(),
            "districts": $('.permanent #districts').val(),
            "upazilas": $('.permanent #upazilas').val(),
            "poroshaba": $('.permanent #poroshaba').val(),
            "unions": $('.permanent #unions').val(),
            "word": $('.permanent #word').val(),
            "country": $('.permanent #country').val(),
            "citizen": $('.permanent #citizen').val()
        }

        var presentAddress = {
            "addressline": $('.present #addressline').val(),
            "house_number": $('.present #house_number').val(),
            "zip_code": $('.present #zip_code').val(),
            "devision": $('.present #devision').val(),
            "districts": $('.present #districts').val(),
            "upazilas": $('.present #upazilas').val(),
            "poroshaba": $('.present #poroshaba').val(),
            "unions": $('.present #unions').val(),
            "word": $('.present #word').val(),
            "country": $('.present #country').val(),
            "citizen": $('.present #citizen').val()
        }

 



        // console.log(Userinfo);
        // console.log(profession);

        // console.log(parmanentAddress);
        // console.log(presentAddress)

    });
    </script>

</body>

</html>