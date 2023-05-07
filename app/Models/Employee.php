<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function typeIdentification(){
        return $this->hasOne(TypeIdentification::class,"id","type_identifications_id");
    }
    public function workingInformation(){
        return $this->hasOne(EmployeeWorkingInformation::class,"employee_id","id");
    }
    
}
