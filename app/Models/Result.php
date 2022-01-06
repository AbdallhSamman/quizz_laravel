<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    
    
        protected $fillable = [
            'id',
            'user_id',
            'exam_id',
            'exam_name',
            'mark',
            'correct_answer',
            'wrong_answer',
            'status'
       
        ];
        use HasFactory;
        public function user()
        {
            return $this->belongsTo(User::class);	
        }
        public function exam()
        {
            return $this->belongsTo(Exam::class);
        }
}