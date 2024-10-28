<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function hospitals(){
        return $this->belongsToMany(Hospital::class)->withPivot('contract_start_date','contract_end_date','isPartTime')->as('customName');
    }

}
