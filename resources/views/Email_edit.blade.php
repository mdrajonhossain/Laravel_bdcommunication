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
                    <form action="/Email_edit_post/{{$Email_edit->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email Address</label>
                            <input class="form-control form-control-lg" type="email"  name="email" value="{{$Email_edit->email}}" placeholder="Enter Email Address" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">First Name</label>
                            <input class="form-control form-control-lg" type="text"  name="first_name" value="{{$Email_edit->first_name}}" placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Last Name</label>
                            <input class="form-control form-control-lg" type="text"  name="last_name" value="{{$Email_edit->last_name}}" placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Company Name</label>
                            <input class="form-control form-control-lg" type="text"  name="company" value="{{$Email_edit->company}}" placeholder="Enter Last Name">
                        </div>


                        <div class="form-group">
                            <label for="formGroupExampleInput">Website</label>
                            <input class="form-control form-control-lg" type="text"  name="website" value="{{$Email_edit->website}}" placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Custom Field</label>
                            <input class="form-control form-control-lg" type="text"  name="custom_field" value="{{$Email_edit->custom_field}}" placeholder="Enter Custom Field">
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
 
       
@endsection
