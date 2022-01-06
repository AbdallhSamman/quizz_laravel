<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable=[
        'exam_name',
        'image',
        'exam_desc',
        'exam_num_q',
        'user_id',
    ];
    public function question(){
        return $this->hasMany(Question::class);
    }
    
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
