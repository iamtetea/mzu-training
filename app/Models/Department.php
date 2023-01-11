<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'limit',
        'branch',
        'is_active',
    ];

    protected $cascadeDeletes = [
        'branches'
    ];

    protected $hidden = [
        // 'is_active',
        // 'limit'
    ];

    protected $casts = [
        'name' => 'string',
        'limit' => 'string',
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
