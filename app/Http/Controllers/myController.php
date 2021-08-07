<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index() {
	    return view('index');
    }

    public function employeeDashboard() {
	    return view('employee-dashboard');
    }
}
