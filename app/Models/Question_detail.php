<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question_detail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'form_id',
        'questionValue',
        'questionTypeValue',
        'ansValueData',
    ];

}
