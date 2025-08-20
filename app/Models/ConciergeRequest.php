<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConciergeRequest extends Model
{
    protected $fillable = ['guest_id','booking_id','subject','description','status','priority'];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
