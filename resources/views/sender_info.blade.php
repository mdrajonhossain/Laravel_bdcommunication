@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Sender Info</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('sender_info_post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Sender Name</label>
                            <input class="form-control form-control-lg" type="text"  name="sendername" value="{{$sender_info->sendername}}" placeholder="Enter Your Sender Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Reply-To Email Address</label>
                            <input class="form-control form-control-lg" type="email"  name="replyto" value="{{$sender_info->replyto}}"  placeholder="Enter Your Reply-To Email Address">
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
