<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UmrohBooking; // Import the UmrohBooking model
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;

class UmrohBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ongoingBookings = UmrohBooking::where('status', 'pending')->get();
        $completedBookings = UmrohBooking::where('status', 'completed')->get();
        return view('umroh-saya', compact('ongoingBookings', 'completedBookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Method to show the form for creating a new booking
        return view('umroh-saya.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:umroh_bookings',
            'phone' => 'required|string|max:20',
            'departure_date' => 'nullable|date',
        ]);

        // Create a new UmrohBooking instance and save it to the database
        // Set default status to 'pending'
        $booking = UmrohBooking::create(array_merge($validatedData, ['status' => 'pending']));

        // Redirect back to the index page with a success message
        return Redirect::route('umroh-saya.index')->with('success', 'Pemesanan Umroh berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Method to display a specific booking (optional for this case)
        $booking = UmrohBooking::findOrFail($id);
        return view('umroh-saya.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Method to show the form for editing a booking
        $booking = UmrohBooking::findOrFail($id);
        return view('umroh-saya.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:umroh_bookings,email,' . $id, // Ignore unique rule for the current booking
            'phone' => 'required|string|max:20',
            'departure_date' => 'nullable|date',
            'status' => 'required|string|in:pending,completed,cancelled', // Validate status as well
        ]);

        // Debugging: Dump the validated data
        Log::info('Validated Data:', $validatedData);

        // Find the booking
        $booking = UmrohBooking::findOrFail($id);
        Log::info('Booking before update:', $booking->toArray());

        // Update the booking attributes individually or using fill
        $booking->fill($validatedData);

        // Add logic to automatically set status to completed if departure date is in the past
        if (isset($booking->departure_date) && $booking->departure_date !== null) {
            $departureDate = \Carbon\Carbon::parse($booking->departure_date);
            if ($departureDate->isPast() && $booking->status !== 'cancelled') {
                $booking->status = 'completed';
            }
        }
        Log::info('Booking after date check logic:', $booking->toArray());

        // Save the changes to the database
        $booking->save();

        Log::info('Booking after save:', $booking->toArray());

        // Redirect back to the index page with a success message
        return Redirect::route('umroh-saya.index')->with('success', 'Pemesanan Umroh berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the booking and delete it
        $booking = UmrohBooking::findOrFail($id);
        $booking->delete();

        // Redirect back to the index page with a success message
        return Redirect::route('umroh-saya.index')->with('success', 'Pemesanan Umroh berhasil dihapus!');
    }
}
