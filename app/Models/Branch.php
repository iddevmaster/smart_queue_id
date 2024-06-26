<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;


    
    protected $table = 'branch';

    protected $fillable = [
        'id',
        'name',
        'detail',
        'address',
        'tel',
        'social',
        'reserve_day',
        'cancel_day',
        'org_id',
        'images'
    ];
}


