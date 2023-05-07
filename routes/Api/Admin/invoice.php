<?php

use App\Http\Controllers\Api\InvoiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Form Factura
|--------------------------------------------------------------------------
*/
Route::post('/invoiceSale-list', [InvoiceController::class, 'list'])->name('api.invoiceSale.list');
Route::post('/invoiceSale-create', [InvoiceController::class, 'store'])->name('api.invoiceSale.store');
Route::put('/invoiceSale-update', [InvoiceController::class, 'store'])->name('api.invoiceSale.update');
Route::delete('/invoiceSale-delete/{id}', [InvoiceController::class, 'delete'])->name('api.invoiceSale.delete');
Route::get('/invoiceSale-info/{id}', [InvoiceController::class, 'info'])->name('api.invoiceSale.info');
Route::post('/invoiceSale-changeState', [InvoiceController::class, 'changeState'])->name('api.invoiceSale.changeState');
Route::post('/invoiceSale-dataForm', [InvoiceController::class, 'dataForm'])->name('api.invoiceSale.dataForm');
Route::post('/invoiceSale-excel', [InvoiceController::class, 'excel'])->name('api.invoiceSale.excel');
Route::get('/invoiceSale-automaticNumbering/{id}', [InvoiceController::class, 'automaticNumbering'])->name('api.invoiceSale.automaticNumbering');