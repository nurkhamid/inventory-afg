<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
		'supplier_id',
		'product_id',
		'quantity',
		'purchase_date'
    ];

    protected $dates = ['purchase_date'];

    public function product()
    {
		return $this->belongsTo(Product::class);	
    }

    public function supplier()
    {
		return $this->belongsTo(Supplier::class);
    }

    public function setPurchaseDateAttribute($date)
	{
		$this->attributes['purchase_date']  = Carbon::parse($date);
	}
}
