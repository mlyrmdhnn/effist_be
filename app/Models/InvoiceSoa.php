<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSoa extends Model
{
    use HasFactory;
    protected $table = 'invoice_soa';
    protected $guarded = [];
}
