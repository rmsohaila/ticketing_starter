<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    public $table = 'audit_logs';

    protected $fillable = [
        '...',
    ];

    protected $casts = [
        'properties' => 'collection',
    ];
}
