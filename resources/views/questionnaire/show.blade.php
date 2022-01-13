@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- {{$quest}} - {{$id}} --}}
                <div class="card-header text-center">{{$quest->title}}</div>
                  <div class="card-body ">
                      <a class="btn btn-sm btn-primary" href="{{route('question.create', $quest->id)}}">Add Question</a>
                    
                  </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
