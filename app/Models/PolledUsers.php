<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolledUsers extends Model
{
  use HasFactory;

  protected $fillable = ['email', 'hash'];

  // one polled_user belongs to many answers
  public function userAnswer()
  {
    //create the many to one relation
    return $this->belongsTo(UserAnswer::class);
  }
}
