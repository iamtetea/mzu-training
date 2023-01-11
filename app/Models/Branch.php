<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $fillable = [
        'department_id',
        'name',
    ];

    // protected $cascadeDeletes = [
    //     'department'
    // ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
