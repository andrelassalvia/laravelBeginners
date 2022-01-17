@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                
                <div class="card-header text-center">{{ __('Questionnaires') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="{{route('questionnaire.create')}}" class="btn btn-dark">Create new questionnaire</a>
                </div>
            </div>

            {{-- Lista de questionarios --}}
            <div class="card mt-4">
                
                <div class="card-header">My Questionnaires</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($questionnaires as $questionnaire )
                            <li class="list-group-item">
                                <a href="{{route('questionnaire.show', $questionnaire)}}">
                                    {{$questionnaire->title}}
                                </a>
                                <div class="mt-2">
                                    <small>
                                        Share
                                    </small>
                                    <p>
                                        {{-- Refactor criando metodo path no model --}}
                                        <a href="{{$questionnaire->publicPath()}}">
                                            {{$questionnaire->publicPath()}}
                                        </a> 
                                    </p>
                                </div>
                            </li>                            
                        @endforeach
                    </ul>
                </div>

            </div>


        </div>
    </div>
</div>

@endsection
