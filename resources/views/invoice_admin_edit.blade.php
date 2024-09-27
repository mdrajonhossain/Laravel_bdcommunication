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
                    <form action="/invoice_admin_edit_post/{{$invoice->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">invoice Date</label>
                            <input class="form-control form-control-lg" type="date"  name="invoice_date" value="{{$invoice->invoice_date}}" placeholder="Enter Your Sender Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Due Date</label>
                            <input class="form-control form-control-lg" type="date"  name="due_date" value="{{$invoice->due_date}}" placeholder="Enter Your Reply-To Email Address">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Total</label>
                            <input class="form-control form-control-lg" type="number"  name="total" value="{{$invoice->total}}" placeholder="Enter Your Reply-To Email Address">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">invoice Status</label>
                            

                            <select class="form-control rounded-0" name="paid">
                               
                                    
                                
                              <option value="0">Unpaid</option>
                              <option value="1">paid</option>
                
                             
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
