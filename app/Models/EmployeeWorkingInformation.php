<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkingInformation extends Model
{
    use HasFactory;

    public function risk_class(){
        return $this->hasOne(RiskClass::class,"id","risk_class_id");
    }
}
