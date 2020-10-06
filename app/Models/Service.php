<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'vehicle_id',
        'name',
        'description',
    ];


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id', 'specification_id');
    }
}
