<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    //public $timestamp = false;
    protected $fillable = [
        'user_id',
        'job_title',
        'status',
        'start_date',
        'end_date',
        'timming',
        'payment',
        'hourly_rate',
        'bonus',
        'description',
        'job_added_by',
        'job_type',
        'resources'
    ];
}
