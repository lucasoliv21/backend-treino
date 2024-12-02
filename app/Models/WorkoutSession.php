<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutSession extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workoutPlan()
    {
        return $this->belongsTo(WorkoutPlan::class);
    }

    public function workoutDetails()
    {
        return $this->hasMany(WorkoutDetail::class);
    }

}
