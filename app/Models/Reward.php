<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;
    protected $fillable =['cost', 'note', 'employee_id', 'project_id'];

    public function Employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
