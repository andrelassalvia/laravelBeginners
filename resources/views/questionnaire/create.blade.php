@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">

              <div class="card">

                  <div class="card-header text-center">Create New Quetionnaire</div>


                  <div class="card-body ">

                    {{-- Route and Method --}}
                    <form action="{{route('questionnaire.store')}}" method="post">

                      @csrf
                      
                      {{-- Title --}}
                      <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
                        <small id="titleHelp" class="form-text text-muted">Give a title to your questionnaire</small>
                          <div>
                            @error('title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                          </div>
                      </div>
                      
                      {{-- Purpose --}}
                      <div class="mb-3">
                        <label for="purpose" class="form-label">Purpose</label>
                        <textarea name="purpose" class="form-control" id="purpose" rows="3" placeholder="Say your purpose"></textarea>
                        <small id="purposeHelp" class="form-text form-muted">Giving a purpose will increase responses</small>
                          <div>
                            @error('purpose')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                          </div>
                      </div>

                      {{-- Create --}}
                      <button type="submit" class="btn btn-sm btn-primary">Create</button>
                    
                    </form>
                  </div>
               </div>
            </div>
        </div>
  </div>
@endsection
