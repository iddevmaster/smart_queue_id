<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organize extends Model
{
    use HasFactory;


    protected $table = 'organization';

    protected $fillable = [
        'id',
        'name',
        'addr',
        'contact'
    ];
}
