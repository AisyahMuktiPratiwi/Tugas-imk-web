<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservations = Reservation::with(['area', 'customer', 'invoice.payment'])->get();

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'List of reservations',
                'data' => $reservations,
            ], 200);
        }

        return view('admin.reservasi', compact('reservations'));
    }

    public function customer(Request $request, $id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            abort(404, 'Customer not found');
        }

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Reservation details',
                'data' => $customer,
            ], 200);
        }

        return view('admin.detailcustomer', compact('customer'));
    }

    public function show($id)
    {
        $reservation = Reservation::with(['area', 'customer', 'invoice.payment'])->find($id);

        if (!$reservation) {
            return response()->json(['message' => 'Reservation not found'], 404);
        }

        return response()->json([
            'message' => 'Reservation details',
            'data' => $reservation,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'area_id' => 'required|exists:areas,id',
            'reservation_date' => 'required|date',
            'total_guest' => 'required|integer',
            'time_slot' => 'required|in:11:00-14:00,17:00-20:00,20:00-22:00',
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'occasion' => 'required|in:noevent,lunch,dinner,birthday,anniversary,other',
            'special_request' => 'nullable|string',
            'payment_method' => 'required|string',
        ]);

        $reservation = Reservation::create([
            'area_id' => $request->area_id,
            'reservation_date' => $request->reservation_date,
            'total_guest' => $request->total_guest,
            'time_slot' => $request->time_slot,
        ]);

        Customer::create([
            'reservation_id' => $reservation->id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'occasion' => $request->occasion,
            'special_request' => $request->special_request,
        ]);

        $payment = Payment::where('method', $request->payment_method)->first();

        if (!$payment) {
            return response()->json(['message' => 'Payment method not found'], 404);
        }

        $invoice = Invoice::create([
            'reservation_id' => $reservation->id,
            'invoice_number' => 'INVTMR' . rand(1000, 9999),
            'due_date' => now()->addDays(3),
            'total_amount' => $reservation->area->price,
            'payment_id' => $payment->id,
        ]);

        return response()->json([
            'message' => 'Reservation successful',
            'invoice' => [
                'invoice_number' => $invoice->invoice_number,
                'due_date' => $invoice->due_date,
                'total_amount' => $invoice->total_amount,
                'payment_method' => $payment->method,
            ],
        ]);
    }
}
