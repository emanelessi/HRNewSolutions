<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;
    protected $fillable =['start_date', 'end_date', 'employee_id', 'job_id', 'department_id'];

    public function Employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
