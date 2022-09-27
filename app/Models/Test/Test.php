<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Test extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "test";

    protected $fillable = [
        'test'
    ];

    protected $hidden = [
        // 'id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
