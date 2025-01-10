<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'id', // User ID (foreign key)
        'order_date',
        'total_price',
        'status',
        'delivery_address',
        'delivery_slot',
    ];

 public $timestamps = false;
 
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
