@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    
   

    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Test Message</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('Test_Camp_post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Your Email</label>
                            <input class="form-control form-control-lg" type="email"  name="email" placeholder="Enter Your Email">
                            <input class="form-control" type="hidden" name="subject" id="from_email" value="{{ $Test_Camp->subject}}" required>
                            <input class="form-control" type="hidden" name="body" id="from_email" value="{{ $Test_Camp->body}}" required>
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
