<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    protected $guard = "admin";

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];



}
