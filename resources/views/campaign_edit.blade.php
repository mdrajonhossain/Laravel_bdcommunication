@extends('layouts.app')
@section('content')
    <!-- Include jQuery before Summernote -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <div class="card card-default">
        <div class="container-centered">

            @if (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
        
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Setup Campaign</h2>

                </div>
                <div class="card-body">
                    <form action="/campaign_edit_post/{{$campaign_edit->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Subject</label>
                            <input class="form-control form-control-lg" type="text"  name="subject" value="{{$campaign_edit->subject}}" placeholder="Enter Subject">
                        </div>
                        
                        <div class="form-group">
                            <label for="summernote">Message Body</label>
                            <textarea  id="summernote" name="body"> {!! $campaign_edit->body ?? '' !!} </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Attachment</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlFile1">Message Token </label><br>
                            <label for="exampleFormControlFile1"> --------------- </label><br>
                            <label for="exampleFormControlFile1">{first_name} </label><br>
                            <label for="exampleFormControlFile1">{last_name} </label><br>
                            <label for="exampleFormControlFile1">{company_name} </label><br>
                            <label for="exampleFormControlFile1">{website} </label><br>
                        </div>
                       
                        @php
                        $img = App\Models\Image::where('message_id',$campaign_edit->id)->get();
                        // dd($img);
                        @endphp
                        @foreach ($img as $img)
                        {{-- <img src="{{ isset($image->name) ? asset('backend/message/'.$image->name) : ''}}" width="20%" height="100px"><br> --}}
                        <img width="150" height="150" src="{{ asset('image/' . $img->name) }}" alt="{{ $img->name }}">
                        <a href="{{ url('image_del/' . $img->id) }}" class="btn btn-danger" role="button" >X</a>
                        @endforeach

                        <br>
                        <div class="form-group">
                            <label for="meeting"> <span class="badge badge-primary">Schedule Your Campaign</span> </label>
                            
                            <input type="datetime-local" id="meeting" name="time"  value="{{$campaign_edit->time}}" >
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Get the current date and time in UTC
        const now = new Date();
        
        // Convert to Bangladesh time (UTC+6)
        now.setHours(now.getHours() + 6);
        
        // Format the time as YYYY-MM-DDTHH:MM
        const formattedNow = now.toISOString().slice(0, 16);
        
        // Set the value and min attributes to the current date and time in BD
        const meetingInput = document.getElementById('meeting');
        meetingInput.value = formattedNow;
        meetingInput.min = formattedNow;
    </script>

<script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>

<style>
    .ck-editor__editable_inline {
        color: black; /* This sets the text color to black */
    }
</style>
       
@endsection
