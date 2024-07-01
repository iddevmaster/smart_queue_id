<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    // protected $fillable = [
    //     'id',
    //     'service_id',
    //     'day_of_week',
    //     'start_time',
    //     'end_time',
    //     'amount_queue',
    //     'max_queue'
    // ];
}
