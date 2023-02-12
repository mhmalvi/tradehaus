<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BillingDetails;
use App\Models\OrderedProducts;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function billingDetail(){
        return $this->belongsTo(BillingDetails::class);
    }

    public function orderedProducts(){
        return $this->hasMany(OrderedProducts::class);
    }
}
