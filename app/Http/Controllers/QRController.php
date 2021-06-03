<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QRController extends Controller
{

    public function QRPage()
    {
        return view('qrcode.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => "required",
            'event_date' => 'required'
        ]);

        QrCode::query()->create([
            'event_name' => $request->event_name,
            'event_date' => $request->event_date,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('qrcode.list')->with('New Event Added Successfully');
    }

    public function details()
    {
        return view('qrcode.details', [
            'qr_codes' => QrCode::query()->get()
        ]);
    }
}
