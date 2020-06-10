<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_number',
        'type',
        'formula',
        'debited',
        'credited',
        'called',
        'uuid',
        'status',
        'provider',
    ];

    protected $casts = [
        'user_number' => 'integer',
        'debited' => 'integer',
        'credited' => 'integer',
    ];
}
