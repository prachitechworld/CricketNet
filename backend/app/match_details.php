<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match_details extends Model
{
    public function team()
    {
        return $this->belongsTo('App\team');
    }

}
