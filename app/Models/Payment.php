<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'user_id',
        'amount',
        'payment_method',
        'status',
        'transaction_id',
        'paid_at'
    ];

    // Платеж → бронирование
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Платеж → пользователь
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
