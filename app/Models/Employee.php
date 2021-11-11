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

    public function Department()
    {
        return $this->hasOne(Department::class, 'department_id');
    }

    public function Job()
    {
        return $this->hasOne(Job::class, 'job_id');
    }

    public function Reward()
    {
        return $this->hasOne(Reward::class, 'employee_id');
    }

    public function Holiday()
    {
        return $this->hasOne(Holiday::class, 'employee_id');
    }

    public function CheckInOut()
    {
        return $this->hasOne(CheckInOut::class, 'employee_id');
    }

    public function Project()
    {
        return $this->hasMany(Project::class, 'project_id', 'id');
    }

    public function JobHistory()
    {
        return $this->hasOne(JobHistory::class, 'employee_id');
    }

}
