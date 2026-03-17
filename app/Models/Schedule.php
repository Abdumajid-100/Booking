<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'day_of_week',
        'start_time',
        'end_time',
        'is_day_off'
    ];

    // Расписание → бизнес
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    // helper (день недели)
    public static function days()
    {
        return [
            0 => 'Sunday',
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
        ];
    }

    public function getDayNameAttribute()
    {
        return self::days()[$this->day_of_week];
    }
}
