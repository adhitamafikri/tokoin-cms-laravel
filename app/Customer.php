<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'wallet_address', 'amount', 'currency', 'document'
    ];
}
