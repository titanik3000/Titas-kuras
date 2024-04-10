<?php

namespace App\Http\Controllers;

use App\Models\FuelRecord;
use Illuminate\Http\Request;

class FuelRecordController extends Controller
{
    public function create()
    {
        return view('fuel_records.create');
    }

    public function store(Request $request)
    {
        // Validate and process the request data, then save the new record
        FuelRecord::create($request->all());

        // Redirect to a relevant page after storing
        return redirect()->route('dashboard');
    }

    public function edit(FuelRecord $fuel_record)
    {
        return view('fuel_records.edit', compact('fuel_record'));
    }

    public function update(Request $request, FuelRecord $fuel_record)
    {
        // Validate and update the data
        // Example: $validatedData = $request->validate([...]);
        // $fuel_record->update($validatedData);

        return redirect()->route('dashboard'); // Redirect after update
    }
    
}
