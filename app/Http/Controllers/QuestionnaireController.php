<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionnaireRequest;
use App\Models\Questionnaire;
use App\Models\User;


class QuestionnaireController extends Controller
{

    public function __construct(){

        // Proteger a classe com o a autenticacao
        $this->middleware('auth');

    }
    
    public function create(User $user){

        return view('questionnaire.create');
    }

    public function store(Questionnaire $questionnaire, QuestionnaireRequest $validation){
       
        $data = $validation->all();

        // $data['user_id'] = auth()->user()->id;
        // $quest = $questionnaire->create($data);

        $quest = auth()->user()->questionnaires()->create($data);

        return redirect()->route('questionnaire.show', $quest->id);

    }

    public function show($id){
        $quest = Questionnaire::find($id);
        
        return view ('questionnaire.show', compact('quest'));
    }
}
