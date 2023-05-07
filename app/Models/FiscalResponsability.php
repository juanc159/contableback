<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiscalResponsability extends Model
{
    use HasFactory;

    public function fiscalResponsabilityThirds(){
        return $this->belongsToMany(Third::class,'fiscal_responsability_thirds','fiscal_responsabilities_id','third_id');
    }
}
