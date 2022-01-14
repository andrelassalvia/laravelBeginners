@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- Titulo --}}
                <h1>{{$questionnaire->title}}</h1>
                <form action="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="POST">
                    @csrf
                    {{-- Lista de perguntas --}}
                    @foreach ($questionnaire->questions as $key => $question)
                    <div class="card mt-4">
                        <div class="card-header"><strong>{{$key +1}}-</strong> {{$question->question}}
                        </div>
                        <div class="card-body ">
                            @error('responses.'.$key.'.answer_id')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            <ul class="list-group">
                            {{-- lista de respostas --}}
                                @foreach ($question->answers as $answer)
                                    <label for="answer{{$answer->id}}"> {{-- label permite que todo o conj seja clicado, nao somente o radio --}}
                                        <li class="list-group-item">
                                            <input 
                                                class="mr-2" type="radio" name="responses[{{$key}}][answer_id]"
                                                {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : ''}}
                                                value="{{$answer->id}}" id="answer{{$answer->id}}"> {{$answer->answer}}

                                            <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                                        </li>
                                    </label>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    <div class="card mt-3">

                        <div class="card-header">Your Information</div>

                        <div class="card-body">

                            <label for="name" class="form-label">Name</label>
                            <input name="survey[name]" type="text" class="form-control" id="name" placeholder="Enter name">
                                <small id="nameHelp" class="form-text text-muted">Write your name</small>
                                <div>
                                    @error('survey.name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            
                            <label for="email" class="form-label">Email</label>
                            <input name="survey[email]" type="email" class="form-control" id="email" placeholder="Enter email">
                                <small id="emailHelp" class="form-text form-muted">Your email</small>
                                <div>
                                    @error('survey.email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            
                        </div>
                    </div>

                    <button class="btn btn-dark btn-sm" type="submit">Complete Survey</button>
                </form>
            </div>
        </div>
    </div>
             
@endsection
