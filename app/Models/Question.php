<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        "question_titel",
        "answer_one",
        "answer_two",
        "answer_three",
        "answer_four",
        "correct_answer",
        "exam_id",
    ];
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
