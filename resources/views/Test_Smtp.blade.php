@extends('layouts.app')
<style>
.card-header {
    padding: 0.35rem 1.25rem;
    }
</style>
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header text-left">
                        <h3 class="card-title">
                            <b> Test Server</b>
                        </h3>
                    </div>
                    <div class="card_body m-3">
                        @if(session()->has('success'))
                            <div class="btn btn-info">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @php
                            $link = "/Test_Smtp_post";
                        @endphp
                        <form method="post" action="<?= $link; ?>">
@csrf
<label for="exampleInputBorder"></label>
    <input type="hidden" class="form-control" name="hostname" id="hostname" value="{{ $smtp->hostname}}" required>

    <label for="exampleInputBorderWidth2">Server SMTP</label>
    <input class="form-control" type="email" name="username" id="username" value="{{ $smtp->email}}" required>

    <label for="exampleInputBorderWidth2"></label>
    <input class="form-control" type="hidden" name="password" id="password" value="{{ $smtp->password}}" required>

    <label for="exampleInputBorderWidth2"></label>
    <input class="form-control" type="hidden" name="port" id="port" value="{{ $smtp->port}}" required>

    <label for="exampleInputBorderWidth2"></label>
    <input class="form-control" type="hidden" name="from_email" id="from_email" value="{{ $smtp->email}}" required>


    
  
    
    <label for="exampleInputBorderWidth2">To Email</label>
    <input class="form-control" type="email" name="to" id="to" required>
    
    <br>
    
    <button class="btn btn-info btn-sm" >Send</button>
</form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection