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
                    <form action="{{ route('invoice_post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">invoice Date</label>
                            <input class="form-control form-control-lg" type="date"  name="invoice_date" placeholder="Enter Your Sender Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Due Date</label>
                            <input class="form-control form-control-lg" type="date"  name="due_date" placeholder="Enter Your Reply-To Email Address">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Total</label>
                            <input class="form-control form-control-lg" type="number"  name="total" placeholder="Enter Your Reply-To Email Address">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Which User</label>
                            

                            <select class="form-control rounded-0" name="user_id">
                                @foreach ($user as $users)
                                    
                                
                              <option value="{{$users->id}}">{{$users->name}}</option>
                
                
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
