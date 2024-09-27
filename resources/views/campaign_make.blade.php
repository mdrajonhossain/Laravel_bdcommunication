@extends('layouts.app')

@section('content')
    <!-- Include jQuery before Summernote -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <div class="card card-default">
        <div class="container-centered">
            <!-- Beauty Centered Example -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h2>Setup Campaign</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('campaign_post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Subject</label>
                            <input class="form-control form-control-lg" type="text"  name="subject" placeholder="Enter Subject">
                        </div>
                        
                        <div class="form-group">
                            <label for="summernote">Message Body</label>
                            <textarea  id="summernote" name="body"> {!! $msg->msg_body ?? '' !!} </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Attachment</label>
                                                        <label for="exampleInputBorder">Message Photo</label>
                                <input type="file" 
                                name="images[]" 
                                id="inputImage"
                                multiple 
                                class="form-control @error('images') is-invalid @enderror">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Message Token </label><br>
                            <label for="exampleFormControlFile1"> --------------- </label><br>
                            <label for="exampleFormControlFile1">{first_name} </label><br>
                            <label for="exampleFormControlFile1">{last_name} </label><br>
                            {{-- <label for="exampleFormControlFile1">{company_name} </label><br>
                            <label for="exampleFormControlFile1">{website} </label><br>
							<label for="exampleFormControlFile1">{custom_field} </label><br> --}}
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect14">Email Group</label>
                            <select class="form-control rounded-0" name="group_id">
                                @foreach ($group as $groups)
                                    
                                
                              <option value="{{$groups->id}}">{{$groups->name}}</option>


                              @endforeach
                            </select>
                          </div>
                        <br>
                        <div class="form-group">
                            <label for="meeting"> <span class="badge badge-primary">Schedule Your Campaign</span> </label>
                            
                            <input type="datetime-local" id="meeting" name="time">
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
