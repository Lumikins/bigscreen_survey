<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // one survey belongs to many questions
    public function question()
    {
        //create the many to one relation
        return $this->belongsTo(Question::class);
    }
}
