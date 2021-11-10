<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    protected $fillable =['duration', 'description', 'date', 'type', 'status', 'employee_id'];

    public function Employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
