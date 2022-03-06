<?php

namespace App\Models;

use App\Http\Controllers\Admin\Auth\AppointmentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    public function doctors(){
        return $this->hasMany(Doctor::class,'specialist_id');
    }
}
