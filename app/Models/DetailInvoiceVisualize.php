<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailInvoiceVisualize extends Model
{
    use HasFactory;

    public function detailInvoiceAvailable(){
        return $this->belongsToMany(DataDetailInvoiceAvailable::class,'detail_invoice_visualizes','type_receipt_invoices_id','type_receipt_invoices_id');
    }
}
