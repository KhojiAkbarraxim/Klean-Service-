<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'begin_date',
        'end_date',
        'publish_limit',
        'price',
        'human_count',
        'cl_name',
        'cl_number',
    ];
}
