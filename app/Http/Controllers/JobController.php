<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function getLatestJob(){
        return Job::latest()->take(10)->get();
    }


    public function getAllJob(){
        return Job::all();
    }
}
