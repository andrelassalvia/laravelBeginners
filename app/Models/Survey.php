<?php

namespace App\Models;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questionnaire(){

        return $this->belogsTo(Questionnaire::class);
    }

    public function responses(){
        return $this->hasMany(SurveyResponse::class);
    }
}
