@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card">

                    {{-- Cabcalho --}}
                    <div class="card-header text-center">{{$questionnaire->title}}</div>

                    <div class="card-body ">
                        <a class="btn btn-sm btn-primary" href="{{route('question.create', $questionnaire)}}">Add Question</a>
                        <a class="btn btn-sm btn-primary" href="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}">Take Survey</a>
                    </div>
                    
                </div>

                {{-- Perguntas e alternativas --}}
                @foreach ($questionnaire->questions as $question)
                    <div class="card mt-4">

                            <div class="card-header">
                                {{$question->question}}
                            </div>

                            <div class="card-body ">
                                <ul class="list-group ">
                                    @foreach ($question->answers as $answer)
                                        <div class="list-group-item d-flex justify-content-between">{{$answer->answer}} 

                                            @if($question->responses->count() > 0)
                                            
                                                <div>{{intval(($answer->responses->count()*100)/$question->responses->count())}}%</div>

                                            @endif
                                          
                                        </div>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- Delete Question --}}
                            <div class="card-footer">
                                <form action="{{route('question.destroy', [$questionnaire, $question])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete Question</button>
                                </form>
                            </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
