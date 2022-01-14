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
        // dd($questionnaire);
        // $quest = Questionnaire::find($id);
        
        

        return view('questionnaire.questions.create', compact('questionnaire'));

    }
    
    public function store(QuestionRequest $validation, Questionnaire $questionnaire, Question $question, Answer $answer){
        
        $data = $validation->all();
        // dd($data);

        $question = $questionnaire->questions()->create($data['question']);
        
        $question->answers()->createMany($data['answers']);

        // dd($question);

        return redirect()->route('questionnaire.show', compact('questionnaire'));

        /*
        $id = $request->questionnaire_id;
        
        // valida os dados do request
        $request->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required', // * -> todos os index dentro do array sao requeridos
            'questionnaire_id' => 'required'
        ]);
        
        // grava a questao no BD
        $question = Question::create([
            'questionnaire_id'=> $id,
            'question'=> $request->question['question'],
        ]);
        
        // grava as alternativas no BD
        $answers = $request->answers;
        foreach ($answers as $key => $answer) {

            Answer:: create([
                'question_id' => $question->id,
                'answer' => $answer['answer']
            ]);
            
        }
       */

        // EXEMPLO DO STACKOVERFLOW
        // <input type="text" name="items[1][title]">
        // <input type="text" name="items[1][description]">
        // <input type="text" name="items[1][question_id]">

        // <input type="text" name="items[2][title]">
        // <input type="text" name="items[2][description]">
        // <input type="text" name="items[2][question_id]">
        // $options = $request->only('items');

        // $options_data = [];

        // foreach ($options as $key => $value) {
        //     $options_data[] = $value;
        // }

        // $question->options()->createMany($options_data);


    }
}
