<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class, 'id', 'type_id');
    }
}
