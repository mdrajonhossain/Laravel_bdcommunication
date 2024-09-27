@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    
   

    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Setup Group</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('user_post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input class="form-control form-control-lg" type="text"  name="name" placeholder="Enter  Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input class="form-control form-control-lg" type="email"  name="email" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Phone Number</label>
                            <input class="form-control form-control-lg" type="text"  name="phone" placeholder="Enter Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input class="form-control form-control-lg" type="password"  name="password" placeholder="Enter Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Expiry Date</label>
                            <input class="form-control form-control-lg" type="date"  name="expiry_date" placeholder="Enter expiry_date">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Invoice Status</label>

                            <select class="form-control rounded-0" name="paid">

                              <option value="0">UnPaid</option>
                              <option value="1">Paid</option>
                
                            </select>
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
