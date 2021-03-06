<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionnaireRequest;
use App\Models\Questionnaire;
use App\Models\User;


class QuestionnaireController extends Controller
{

    // public function __construct(){

    //     // Proteger a classe com o a autenticacao
    //     $this->middleware('auth');

    // }
    
    public function create(){

        return view('questionnaire.create');
    }

    public function store(QuestionnaireRequest $validation){
       
        $data = $validation->all();
        // dd($data);

        // $data['user_id'] = auth()->user()->id;
        // $quest = $questionnaire->create($data);

        $questionnaire = auth()->user()->questionnaires()->create($data);
        // dd($questionnaire);

        return redirect()->route('questionnaire.show', $questionnaire);

    }

    public function show(Questionnaire $questionnaire){

        
        $questionnaire = $questionnaire->load('questions.answers.responses'); // encadear relations usando ponto
        
        return view ('questionnaire.show', compact('questionnaire'));
    }
}
