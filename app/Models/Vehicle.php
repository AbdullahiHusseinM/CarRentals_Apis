<?php

namespace App\Models;

use App\Models\Specification;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Service;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id'
    ];


    public function specification()
    {
        return $this->hasOne(Specification::class, 'id', 'vehicle_id');
    }

    public function type()
    {
        return $this->hasOne(Type::class, 'id', 'vehicle_id');
    }


    public function detail()
    {
        return $this->hasOne(Detail::class, 'id', 'vehicle_id');
    }


    public function service()
    {
        return $this->hasOne(Service::class, 'id', 'vehicle_id');
    }


    public function carmodel()
    {
        return $this->hasOne(CarModel::class, 'id', 'vehicle_id');
    }
}
