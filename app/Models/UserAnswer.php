<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function polledUser()
    {
        return $this->hasMany(PolledUser::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
