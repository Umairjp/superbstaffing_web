<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    use HasFactory;
    protected $table = 'quiz_answer';
    public $timestamps = false;
    protected $fillable = [
        'question_id',
        'answer',
        'flag'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
