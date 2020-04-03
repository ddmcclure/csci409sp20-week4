<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels')->with('hotels', $hotels);
    }

    public function create(Request $request) {
        return view('hotelform', $request);
    }

    public function store(Request $request) {
        Hotel::create(['field1' => $request->input('form_field_1'),
        'field2' => $request->input('form_field_2')]);
    }
}

