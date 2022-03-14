<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    use HasFactory;

    protected $table = 'Transaction';
    protected $fillable = [
        'trans_id',
        'level',
        'description',
        'price',
        'status',
        'customer_id',
        'id_technician',
        'created_at',
        'updated_at',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function technician(){
        return $this->belongsTo(Technician::class);
    }
}
