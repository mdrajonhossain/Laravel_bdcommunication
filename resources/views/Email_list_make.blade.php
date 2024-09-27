@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    
   

    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Create Email List</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('Email_list_post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email Address</label>
                            <input class="form-control form-control-lg" type="email"  name="email" placeholder="Enter Email Address" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">First Name</label>
                            <input class="form-control form-control-lg" type="text"  name="first_name" placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Last Name</label>
                            <input class="form-control form-control-lg" type="text"  name="last_name" placeholder="Enter Last Name">
                        </div>

                        

                        <div class="form-group">
                            <label for="exampleFormControlSelect14">Email Group</label>
                            <select class="form-control rounded-0" name="group_id">
                                @foreach ($group as $groups)
                                    
                                
                              <option value="{{$groups->id}}">{{$groups->name}}</option>


                              @endforeach
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
 

    <div class="card card-default">
        <div class="container-centered">
            <div class="card-body">
        <form action="{{ route('txt_emails') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputBorderWidth2">Emails</label>
       
        <input type="file" name="file" id="file" class="form-control">

        <div class="form-group">
            <label for="exampleFormControlSelect14">Email Group</label>
            <select class="form-control rounded-0" name="group_id">
                @foreach ($group as $groups)
                    
                
              <option value="{{$groups->id}}">{{$groups->name}}</option>


              @endforeach
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
@endsection
