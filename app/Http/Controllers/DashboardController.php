<?php

namespace App\Http\Controllers;
use App\Models\fuelRecord;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(Request $request) {
    //     $sortBy = $request->input('sort_by', 'default_column'); // default column to sort by
    //     $sortDirection = $request->input('direction', 'asc'); // default direction
    
    //     if ($request->session()->get('sort_by') === $sortBy) {
    //         $sortDirection = $request->session()->get('direction') === 'asc' ? 'desc' : 'asc';
    //     }

    //     $request->session()->put('sort_by', $sortBy);
    //     $request->session()->put('direction', $sortDirection);

    //     $records = FuelRecord::orderBy($sortBy, $sortDirection)->get();
    //     $records = fuelRecord::all(); // Fetch all records from the database
    //     return view('dashboard', compact('records', 'sortDirection'));
    // }
    public function index(Request $request) {
        // Initialize the query
        $query = FuelRecord::query();
    
        // If 'sort_by' is provided and is a valid column name, apply sorting
        if ($request->has('sort_by') && in_array($request->sort_by, ['pavadinimas', 'kodas', 'uzpiltas_kuro_kiekis', 'data'])) {
            $sortDirection = $request->input('direction', 'asc') == 'asc' ? 'asc' : 'desc'; // Only allow 'asc' or 'desc'
            $query->orderBy($request->sort_by, $sortDirection);
        }
    
        $records = $query->get();
        return view('dashboard', compact('records'));
    }
}

