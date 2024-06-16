<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'name', 'email', 'contact', 'whatsapp', 'address', 'is_active'];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    protected static function booted(): void
    {
        static::created(function ($student) {
            $student->uuid = Str::orderedUuid();
            $student->save();
        });
    }


    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'customer_uuid', 'uuid');
    }
}