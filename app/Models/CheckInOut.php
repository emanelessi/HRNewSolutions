<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInOut extends Model
{
    use HasFactory;
    protected $fillable =['time', 'employee_id'];

    public function CheckInOut(){
        return $this->hasOne(CheckInOut::class,'employee_id');
    }
}
