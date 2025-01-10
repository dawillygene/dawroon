<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deliverie extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveriesFactory> */
    use HasFactory;
    protected $table = 'deliveries';
    public $incrementing = false;
    protected $fillable = [
        'order_id',
        'delivery_person_id',
        'vehicle_id',
        'estimated_delivery_time',
        'actual_delivery_time',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function deliveryPerson()
    {
        return $this->belongsTo(DeliveryPerson::class, 'delivery_person_id', 'delivery_person_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(DeliveryVehicle::class, 'vehicle_id', 'vehicle_id');
    }

}
