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

        // $data['user_id'] = auth()->user()->id;
        // $quest = $questionnaire->create($data);

        $quest = auth()->user()->questionnaires()->create($data);
        // dd($quest);

        return redirect()->route('questionnaire.show', $quest->id);

    }

    public function show(Questionnaire $questionnaire, $id){
        $quest = Questionnaire::find($id);
        // dd($quest);
        // dd($questionnaire->find($id));
        
        return view ('questionnaire.show', ['quest'=>$quest, 'id'=>$id]);
    }
}
