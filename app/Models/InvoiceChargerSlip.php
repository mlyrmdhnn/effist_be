<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceChargerSlip extends Model
{
    use HasFactory;
    protected $table = 'invoice_charger_slip';
    protected $guarded = [];
}
