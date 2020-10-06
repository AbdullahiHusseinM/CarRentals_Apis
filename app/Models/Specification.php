<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'number_of seats',
        'types_of_seats',
        'number_of_doors',
        'gearbox_type',
        'sunroof',
        'engine_capacity'
    ];


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id', 'specification_id');
    }
}
