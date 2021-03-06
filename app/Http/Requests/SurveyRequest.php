<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'survey.name'=> 'required',
            'survey.email'=> 'required|email'
        ];
    }
}
