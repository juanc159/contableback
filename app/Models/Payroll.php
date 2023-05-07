<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    public function employees(){
        return $this->hasMany(PayrollEmployee::class,"payroll_id","id");
    }
}
