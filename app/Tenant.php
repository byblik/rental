<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name', 'address', 'tenancy_id'
    ];
    
    public function getImagePath()
    {
        return '/images/tenants/' . $this->id . '.png';
    }
}
