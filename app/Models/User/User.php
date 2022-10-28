<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    
    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'id',
        'password',
        'created_at',
        'updated_at'
    ];

}