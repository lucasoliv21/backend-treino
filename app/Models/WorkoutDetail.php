<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutDetail extends Model
{
    //
    public function workoutSession()
    {
        return $this->belongsTo(WorkoutSession::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

}
