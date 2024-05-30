<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
            'email' => 'email|max:255',
            'datetime' => 'required|date',
            'destination' => 'required|string',
            'details' => 'nullable|string|max:1000',
        ]);

        $status = 'Pending';

        $booking = new Booking();
        $booking->name = $validated['name'];
        $booking->email = $validated['email'];
        $booking->datetime = $validated['datetime'];
        $booking->destination = $validated['destination'];
        $booking->details = $validated['details'] ?? null;
        $booking->status = $status;
        $booking->save();
        return redirect('/')->with('book_msg', 'Booking successful!');
    }
}
