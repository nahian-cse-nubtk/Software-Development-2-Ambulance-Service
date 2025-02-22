<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Ambulance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;




class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function booking()
    {
        return view('booking');
    }

    public function contact()
    {
        return view('contact');
    }
    public function storeBooking(Request $request)
{
    // Validate the booking data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'location' => 'required|string',
        'emergency' => 'required|string',
        
    ]);

    Booking::create($validated);

    // Redirect with a success message
    return redirect()->route('welcome')->with('success', 'Ambulance booked successfully!');
}
public function ambulances()
    {
        // Fetch all available ambulances
        $ambulances = Ambulance::where('is_available', true)->get();
        return view('ambulances.index', compact('ambulances'));
    }

    // Show ambulance registration form
    public function registerAmbulance()
    {
        return view('ambulances.register');
    }

    // Store the new ambulance in the database
    public function storeAmbulance(Request $request)
    {
        // Validate the ambulance data
        $validated = $request->validate([
            'provider_name' => 'required|string|max:255',
            'ambulance_number' => 'required|string|unique:ambulances',
            'vehicle_type' => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
        ]);

        // Create a new ambulance record
        Ambulance::create($validated);

        // Redirect to the ambulances list with a success message
        return redirect()->route('ambulances.index')->with('success', 'Registration successfull!');
    }
    public function updateAvailability($id)
{
    // Fetch the ambulance by ID
    $ambulance = Ambulance::findOrFail($id);

    // Toggle the availability status
    $ambulance->is_available = !$ambulance->is_available;

    // Save the updated status
    $ambulance->save();

    // Redirect back to the ambulances list with a success message
    return redirect()->route('ambulances.index')->with('success', 'Ambulance availability status updated successfully!');
}
public function showBookings()
    {
        // Fetch all bookings from the database
        $bookings = Booking::all();  // Get all bookings
  

        // Return the view with the bookings data
        return view('bookings.index', compact('bookings'));
    }
    
    public function index(Request $request)
    {
        // Get the search query
        $search = $request->query('search');

        // Query available ambulances
        if ($search) {
            $ambulances = Ambulance::where('is_available', true)
                ->where(function($query) use ($search) {
                    $query->where('provider_name', 'like', "%{$search}%")
                        ->orWhere('ambulance_number', 'like', "%{$search}%")
                        ->orWhere('vehicle_type', 'like', "%{$search}%");
                })
                ->get();
        } else {
            // If no search query, get all available ambulances
            $ambulances = Ambulance::where('is_available', true)->get();
        }

        return view('ambulances.index', compact('ambulances'));
    } 

}
