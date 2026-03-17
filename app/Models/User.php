<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    // Пользователь → бронирования
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Пользователь → бизнесы (если владелец)
    public function businesses()
    {
        return $this->hasMany(Business::class, 'owner_id');
    }

    // Пользователь → платежи
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
