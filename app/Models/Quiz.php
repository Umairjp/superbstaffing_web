<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quiz';
    public $timestamps = false;
    protected $fillable = [
        'question'
    ];

    public function option()
    {
        return $this->hasMany(QuizAnswer::class, 'question_id', 'id');
    }
}
