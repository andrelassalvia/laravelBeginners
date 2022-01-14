@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Create New Question</div>
                  <div class="card-body ">
                    
                    <form action="{{route('question.store', $questionnaire)}}" method="post">
                      @csrf
                      {{-- <input type="hidden" name="questionnaire_id" value="{{$questionnaire->id}}"> --}}
                      
                      {{-- QUESTION --}}
                      <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input 
                          name="question[question]" 
                          type="text" 
                          class="form-control" 
                          id="question" 
                          placeholder="Enter question"
                          value="{{old('question.question')}}">
                        <small id="questionHelp" class="form-text text-muted">Good questions, clever answers</small>
                        <div>
                          @error('question.question')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>

                      {{-- CHOICES --}}
                      <div class="form-group">
                        <fieldset>
                          <legend>Choices</legend>
                          <small id="choicesHelp" class="form-text text-muted">Give good choices</small>

                          {{-- ANSWERS --}}
                          <div>
                            <div class="form-group">
                              <label for="answer1">Choice 1</label>
                              <input type="text" name="answers[][answer]" class="form-control" id="answer1" aria-describedby="choicesHelp" value="{{old('answers.0.answer')}}">
                              {{-- <input type="hidden" name="question_id" value=""> --}}
                              <div class="mb-3">
                                @error('answers.0.answer')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="form-group">
                              <label for="answer2">Choice 2</label>
                              <input type="text" name="answers[][answer]" class="form-control" id="answer2" aria-describedby="choicesHelp" value="{{old('answers.1.answer')}}">
                        
                              <div class="mb-3">
                                @error('answers.1.answer')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="form-group">
                              <label for="answer3">Choice 3</label>
                              <input type="text" name="answers[][answer]" class="form-control" id="answer3" aria-describedby="choicesHelp" value="{{old('answers.2.answer')}}">
                        
                              <div class="mb-3">
                                @error('answers.2.answer')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="answer4">Choice 4</label>
                              <input type="text" name="answers[][answer]" class="form-control" id="answer4" aria-describedby="choicesHelp" value="{{old('answers.3.answer')}}">
                        
                              <div class="mb-3">
                                @error('answers.3.answer')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary mt-4">Add Question</button>
                      
                      
                    
                    </form>
                  </div>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
