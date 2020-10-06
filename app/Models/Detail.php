<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'identification_number',
        'id_photo',
        'passport_photo',
        'plate_number',
        'insurance_number',
        'insurance_certificate',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id', 'detail_id');
    }
}
