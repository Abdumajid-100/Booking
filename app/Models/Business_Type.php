<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Business_Type extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }
}
