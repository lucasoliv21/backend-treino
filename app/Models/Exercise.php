<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    public function workoutPlans()
    {
        return $this->belongsToMany(WorkoutPlan::class, 'workout_exercise');
    }
}
