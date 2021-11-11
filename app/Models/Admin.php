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
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];

//    public function JobHistory(){
//        return $this->hasMany(JobHistory::class,'job_id','id');
//    }
//    public function DepartmentManager(){
//        return $this->hasOne(Department::class,'manager_id');
//    }
//    public function Job(){
//        return $this->belongsTo(Job::class,'job_id');
//    }

}
