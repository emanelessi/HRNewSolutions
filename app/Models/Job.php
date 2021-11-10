<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable =['title', 'description', 'salary'];

    public function Employee(){
        return $this->belongsTo(Employee::class,'job_id');
    }
}
