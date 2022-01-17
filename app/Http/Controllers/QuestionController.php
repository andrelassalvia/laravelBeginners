<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Http\Requests\QuestionRequest;
use App\Models\Answer;

class QuestionController extends Controller
{
    //
    public function create(Questionnaire $questionnaire){

        return view('questions.create', compact('questionnaire'));

    }
    
    public function store(QuestionRequest $validation, Questionnaire $questionnaire, Question $question, Answer $answer){
        
        $data = $validation->all();

        $question = $questionnaire->questions()->create($data['question']);
        
        $question->answers()->createMany($data['answers']);

        return redirect()->route('questionnaire.show', compact('questionnaire'));
 
    }

    public function destroy(Questionnaire $questionnaire, Question $question){

        $questionToDelete = $questionnaire->questions()->find($question->id);
        $questionToDelete ->delete();
        
        return redirect()->route('questionnaire.show', compact('questionnaire'));
    }
}
