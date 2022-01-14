<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Http\Requests\SurveyRequest;


class SurveyController extends Controller
{
    public function show(Questionnaire $questionnaire, $slug){

        $questionnaire = $questionnaire->load('questions.answers');

        return view('questionnaire.survey.show', compact('questionnaire'));

    }

    public function store(SurveyRequest $validation, Questionnaire $questionnaire)
    {
        
        $data = $validation->all();
        
        $survey = $questionnaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);

        return 'Thank you!';

    }
}
