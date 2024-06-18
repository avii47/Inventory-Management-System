<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'net_price',
        'selling_price',
        'total_quantity',
        'sold_quantity',
        'transportation_cost',
        'wasted_quantity'
    ];

    // Accessor for remaining quantity
    public function getRemainingQuantityAttribute()
    {
        return $this->total_quantity - ($this->selled_quantity + $this->wasted_quantity);
    }

    // Accessor for total revenue
    public function getTotalRevenueAttribute()
    {
        return $this->sold_quantity * $this->selling_price;
    }

    // Accessor for profit margin
    public function getProfitMarginAttribute()
    {
        return (($this->selling_price - $this->net_price) * $this->sold_quantity) - (($this->wasted_quantity * $this->net_price) + ($this->transportation_cost));
    }

    // Accessor for profit margin
    public function getProfitLossStatusAttribute()
    {
        $status = (($this->selling_price - $this->net_price) * $this->sold_quantity) - (($this->wasted_quantity * $this->net_price) + ($this->transportation_cost));

        if ($status == 0) {
            return 'Balanced';
        }
        elseif ($status < 0) {
            return 'Loss';
        }
        else {
            return 'Profit';
        }
    }
}
