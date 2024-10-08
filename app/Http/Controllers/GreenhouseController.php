<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData; // Import the SensorData model

class GreenhouseController extends Controller
{
    public function index() {
        return view('home');
    }

    public function monitor() {
        // Retrieve the latest sensor data
        $sensorData = SensorData::latest()->first();
        return view('monitor', ['sensorData' => $sensorData]);
    }

    public function control(Request $request) {
        // Validate incoming data
        $request->validate([
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'light' => 'required|numeric',
        ]);
        
        // Process the data (e.g., send control signals to the greenhouse)
        // For demonstration, we'll just store it in the session or log it
        // Example: session()->put('controlSettings', $request->all());
        
        // Redirect back with a success message
        return redirect()->back()->with('message', 'Settings updated successfully!');
    }

    // If you want to render a control view without form submission,
    // you can create a separate method to just show the form
    public function showControl() {
        return view('control'); // Ensure the view name matches the file name
    }
}
