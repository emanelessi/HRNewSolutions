<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable =['name', 'manager_id'];

    public function Employee(){
        return $this->belongsTo(Employee::class,'department_id');
    }

}
