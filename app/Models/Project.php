<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsToMany(User::class, 'employee_projects');
    }
    public function reward()
    {
        return $this->hasOne(Reward::class, 'project_id');
    }
    public function manager()
    {
        return $this->hasOne(User::class, 'manager_id');
    }
}
