<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CheckinCheckout;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckInOutController extends Controller
{
    public function checkIn(Request $request)
    {

        $request->validate([
            'qrcode' => 'required',
            'check_in' => 'required|date_format:Y-m-d H:i:s.u'
        ]);

        if (CheckinCheckout::query()->whereDate('check_in', "=", date('Y-m-d'))->where('user_id', auth()->user()->id)->where('qr_code_id', $request->qrcode)->exists()) {
            return response()->json([
                'error' => "Already Checkin"
            ], 403);
        }

        CheckinCheckout::query()->create([
            'user_id' => auth()->user()->id,
            'qr_code_id' => $request->qrcode,
            'check_in' => $request->check_in,
            'created_at' => Carbon::now()
        ]);

        return response()->json([
            'message' => 'CheckIn Successfully'
        ]);
    }

    public function checkOut(Request $request)
    {
        $request->validate([
            'qrcode' => 'required',
            'check_out' => 'required|date_format:Y-m-d H:i:s.u'
        ]);

        if (CheckinCheckout::query()->whereDate('check_in', "=", date('Y-m-d'))->where('user_id', auth()->user()->id)->where('qr_code_id', $request->qrcode)->whereNotNull('check_out')->exists()) {
            return response()->json([
                'error' => "Already Checkout"
            ], 403);
        }

        CheckinCheckout::query()
            ->whereDate('check_in', "=", date('Y-m-d'))
            ->where('user_id', auth()->user()->id)
            ->where('qr_code_id', $request->qrcode)
            ->update([
                'check_out' => $request->check_out
            ]);

        return response()->json([
            'message' => 'CheckOut Successfully'
        ]);
    }
}
