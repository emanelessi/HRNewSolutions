<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable =['name', 'salary', 'description', 'manager_id', 'members'];

    public function Employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
