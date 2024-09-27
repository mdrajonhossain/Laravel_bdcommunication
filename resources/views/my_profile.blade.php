@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>My Profile</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('my_profile_post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input class="form-control form-control-lg" type="text"  name="name" value="{{$my_profile->name}}" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input class="form-control form-control-lg" type="email" value="{{$my_profile->email }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Profile Picture (upload max 2MB)</label>

                            <input class="form-control form-control-lg" type="file"  name="file" >
                        </div>
                        <br>
                        <img width="200" height="50" src="{{ asset('profileimg/' . $my_profile->profile_pic) }}" class="user-image rounded-circle" alt="User Image" />
                        <br>

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
