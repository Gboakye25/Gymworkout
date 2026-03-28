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

    public function show($slug)
    {
        $workoutModel = new WorkoutModel();

        $workout = $workoutModel->where('slug', $slug)->first();

        if (!$workout) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Workout not found');
        }

        return view('workout_detail', ['workout' => $workout]);
    }
}