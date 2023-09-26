<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id',
    'payment_date',
     'payment_amount',
     'payment_method',
      'transaction_id',
       'payment_status',
       'invoice_id',
       'payment_description',
        'billing_address',
        'cardholder_name',
        'expiration_date',
        'currency'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Add other relationships as needed
}
