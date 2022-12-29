<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'limit',
        'branch',
        'is_active',
    ];

    protected $hidden = [
        // 'is_active',
        // 'limit'
    ];

    protected $casts = [
        'name' => 'string',
        'limit' => 'string',
    ];
}