<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LedgerAccountAuxiliary extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function subAuxiliaries(){
        return $this->hasMany(LedgerAccountSubAuxiliary::class,'ledgerAccountAuxiliarie_id','id')->orderBy("code","asc");
    }
}
