<?php

namespace App\Controllers;

class Workouts extends BaseController
{
    public function index()
    {
        return view('workouts');
    }
}