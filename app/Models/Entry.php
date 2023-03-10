<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'entryforms';
    protected $fillable = [
        'name',
        'email',
        'tell',
        'message'
    ];
}
