<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queues extends Model
{
    use HasFactory;

    protected $table = 'queues';

    protected $fillable = [
        'id',
        'customer_id',
        'service_id',
        'queue_number',
        'queue_date',
        'time_range',
        'queue_at',
        'queue_brn',
        'auto_shift',
        'finish_at',
        'finish_brn',
        'channel',
        'paid',
        'status'
    ];
}
