<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =['first_name', 'last_name', 'email', 'phone_number', 'hire_date', 'salary', 'photo', 'manager_id', 'job_id'];

    public function Department(){
        return $this->hasOne(Department::class,'department_id');
    }
    public function Job(){
        return $this->hasOne(Job::class,'job_id');
    }
    public function Reward(){
        return $this->hasOne(Reward::class,'employee_id');
    }
    public function Holiday(){
        return $this->hasOne(Holiday::class,'employee_id');
    }
    public function CheckInOut(){
        return $this->hasOne(CheckInOut::class,'employee_id');
    }
    public function Project(){
        return $this->hasMany(Project::class,'project_id','id');
    }
        public function JobHistory(){
        return $this->hasOne(JobHistory::class,'employee_id');
    }

}
