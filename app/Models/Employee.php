<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use SoftDeletes;
    protected $hidden = [
        'password',
        'remember_token',
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
