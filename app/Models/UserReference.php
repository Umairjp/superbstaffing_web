<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReference extends Model
{
    use HasFactory;
    protected $table = 'user_reference';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'name',
        'job_title',
        'phone_number',
        'workplace',
        'start_date',
        'end_date',
    ];
}
