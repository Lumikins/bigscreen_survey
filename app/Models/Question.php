<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [ "question", "question_type", "answer_choice", "survey_id"];

    // many questions belong to one survey  
    public function survey()
    {
        // create the many to one relation
        return $this->hasMany(Survey::class);
    }

    // many answers belong to one question
        public function answer()
    {
        // create the many to one relation
        return $this->belongsTo(Answer::class);
    }
}
