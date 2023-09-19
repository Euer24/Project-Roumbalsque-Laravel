<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReserverenController extends Controller
{
    public function index()
    {
        return view('reserveren');
    }

    public function storeReservation(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'people' => 'required|integer',
            'table_number' => 'required|string',
        ]);

        // Opslaan van reservering in de database
        Reservation::create($validatedData);

        // Redirect naar een bedankpagina of een andere locatie
        return redirect()->route('home');
    }
    
    public function showReservationForm()
{
    return view('reserveren');
}

}

