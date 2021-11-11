<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckInOut extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function CheckInOut(){
        return $this->hasOne(CheckInOut::class,'employee_id');
    }
}
