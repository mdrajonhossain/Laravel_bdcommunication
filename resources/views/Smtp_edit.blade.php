@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    
   

    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Create SMTP</h2>
                </div>
                <div class="card-body">
                    <form action="/Smtp_edit_post/{{$Smtp_edit->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Hostname</label>
                            <input class="form-control form-control-lg" type="text"  name="hostname" value="{{$Smtp_edit->hostname}}" placeholder="Enter Hostname" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Port</label>
                            <input class="form-control form-control-lg" type="number"  name="port" value="{{$Smtp_edit->port}}" placeholder="Enter Port">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Email / Username</label>
                            <input class="form-control form-control-lg" type="text"  name="email" value="{{$Smtp_edit->email}}" placeholder="Enter Email / Username">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input class="form-control form-control-lg" type="text"  name="password" value="{{$Smtp_edit->password}}" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label for="formGroupExampleInput">Daily Limit</label>
                            <input class="form-control form-control-lg" type="number"  name="daily_limit" value="{{$Smtp_edit->daily_limit}}" placeholder="Enter Daily Limit">
                        </div>

                        
                        <div class="form-footer">
                            <button type="submit" class="btn btn-secondary btn-pill">Submit</button>
                            <button type="button" class="btn btn-light btn-pill">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
       
@endsection
