<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenancy extends Model
{
    protected $fillable = [
        'start_date', 'end_date', 'monthly_rent'
    ];
}
