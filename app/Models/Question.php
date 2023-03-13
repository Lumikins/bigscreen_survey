<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  use HasFactory;

  protected $table = 'questions';
  protected $guarded = [];

  public function survey()
  {
    return $this->hasMany(Survey::class);
  }

  public function userAnswer()
  {
    return $this->belongsTo(UserAnswer::class);
  }

  public function type()
  {
    return $this->hasMany(Type::class);
  }

  public function questionAnswers()
  {
    return $this->belongsToMany(QuestionAnswer::class);
  }
}
