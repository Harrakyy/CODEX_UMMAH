<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UmrohBooking;
use Illuminate\Http\Request;

class UmrohBookingController extends Controller
{
    public function index()
    {
        return response()->json(UmrohBooking::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:umroh_bookings',
            'phone' => 'required',
            'departure_date' => 'nullable|date',
            'status' => 'nullable|string',
        ]);

        $booking = UmrohBooking::create($validated);
        return response()->json($booking, 201);
    }

    public function show($id)
    {
        $booking = UmrohBooking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }
        return response()->json($booking);
    }

    public function update(Request $request, $id)
    {
        $booking = UmrohBooking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:umroh_bookings,email,' . $id,
            'phone' => 'sometimes|required',
            'departure_date' => 'nullable|date',
            'status' => 'nullable|string',
        ]);

        $booking->update($validated);
        return response()->json($booking);
    }

    public function destroy($id)
    {
        $booking = UmrohBooking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }
        $booking->delete();
        return response()->json(['message' => 'Booking deleted']);
    }
}
