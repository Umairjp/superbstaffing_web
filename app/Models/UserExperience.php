<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    use HasFactory;
    protected $table = 'user_expierence';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'title',
        'employment',
        'company_name',
        'location',
        'start_date',
        'end_date',
        'currently_working_at',
        'skills'
    ];
}
