<?php

namespace App\Http\Controllers;
use App\Models\fuelRecord;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $records = fuelRecord::all(); // Fetch all records from the database
        return view('dashboard', compact('records'));
    }
}

