<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingLot extends Model
{
    use HasFactory;
    protected $table = 'parking_lots';
    protected $fillable = ['name', 'is_parked'];
}
