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
                    <form action="{{ route('group_post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Group Name</label>
                            <input class="form-control form-control-lg" type="text"  name="name" placeholder="Enter Group Name">
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
