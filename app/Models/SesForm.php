<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesForm extends Model
{
    use HasFactory;

    protected $table = 'sesforms';
    protected $guarded = [];
    protected $fillable = [
        'company',
        'name',
        'email',
        'tell',
        'message'
    ];

}
