<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['customer_uuid', 'amount', 'type'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_uuid', 'uuid');
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}