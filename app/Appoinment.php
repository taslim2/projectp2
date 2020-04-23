<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function test()
    {
        return $this->belongsTo(Tests::class);
    }
}
