<?php

namespace App\Controllers;

use App\Models\WorkoutModel;

class Workouts extends BaseController
{
    public function index()
    {
        $workoutModel = new WorkoutModel();

        $data['workouts'] = $workoutModel->findAll();

        return view('workouts', $data);
    }
}