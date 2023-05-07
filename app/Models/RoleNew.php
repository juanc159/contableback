<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role;

class RoleNew extends Role
{
    use HasFactory;

    public function company(){
        return $this->hasOne(Company::class,'id','company_id');
    }
}
 