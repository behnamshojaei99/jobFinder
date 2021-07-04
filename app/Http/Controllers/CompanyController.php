<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getLatestJob(){
        return Company::latest()->take(10)->get();
    }


    public function getAllJob(){
        return Company::all();
    }
}
