<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'business_type_id',
        'owner_id',
        'logo',
        'status'
    ];

    // Бизнес → владелец
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    // Бизнес → тип
    public function type()
    {
        return $this->belongsTo(Business_Type::class, 'business_type_id');
    }

    // Бизнес → услуги
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    // Бизнес → бронирования
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Бизнес → расписание
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
