<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;
    protected $fillable = ['question_id', 'user_answer'];

    public function polledUser()
    {
        return $this->hasMany(PolledUser::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
