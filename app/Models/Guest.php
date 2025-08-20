<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['name','email','phone','dob','national_id','address'];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function conciergeRequests() {
        return $this->hasMany(ConciergeRequest::class);
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }
}

