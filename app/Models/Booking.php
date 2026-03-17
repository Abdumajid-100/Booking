<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_id',
        'service_id',
        'booking_date',
        'start_time',
        'end_time',
        'status',
        'notes'
    ];

    // Бронирование → пользователь
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Бронирование → бизнес
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    // Бронирование → услуга
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Бронирование → платеж
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
