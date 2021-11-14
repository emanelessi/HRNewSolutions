<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name','last_name','email','password','phone_number','hire_date','salary','photo','job_id','department_id','manager_id','remember_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function department()
    {
        return $this->hasOne(Department::class, 'department_id');
    }

    public function job()
    {
        return $this->hasMany(Job::class, 'job_id','id');
    }

    public function reward()
    {
        return $this->hasMany(Reward::class, 'employee_id','id');
    }

    public function holiday()
    {
        return $this->hasMany(Holiday::class, 'employee_id','id');
    }

    public function checkinout()
    {
        return $this->hasOne(CheckInOut::class, 'employee_id');
    }

    public function project()
    {
        return $this->hasMany(Project::class, 'project_id', 'id');
    }

    public function jobhistory()
    {
        return $this->hasOne(JobHistory::class, 'employee_id');
    }
}