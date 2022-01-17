<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questionnaire;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questionnaire(){

        return $this->belongsTo(Questionnaire::class);
    }

    public function answers(){

        return $this->hasMany(Answer::class);
    }

    public function responses(){
        
        return $this->hasMany(SurveyResponse::class);
    }

    


}
