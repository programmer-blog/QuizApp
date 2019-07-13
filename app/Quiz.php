<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected$guarded = [];

    public function answers()
    {
        return$this->hasMany(Answer::class, 'question_id');
    }
}
