<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    // Menyimpan pembayaran baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'method' => 'required|string',
            'virtual_account' => 'required|string',
            'category' => 'required|in:e-wallet,bank',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('payments', 'public');
        }

        // Simpan data ke database
        $payment = Payment::create([
            'method' => $request->method,
            'virtual_account' => $request->virtual_account,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Payment created successfully',
            'data' => $payment,
        ], 201);
    }

    // Mengupdate data pembayaran
    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return response()->json([
                'message' => 'Payment not found',
            ], 404);
        }

        // Validasi input
        $request->validate([
            'method' => 'required|string',
            'virtual_account' => 'required|string',
            'category' => 'required|in:e-wallet,bank',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $payment->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('payments', 'public');
        }

        // Update data di database
        $payment->update([
            'method' => $request->method,
            'virtual_account' => $request->virtual_account,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Payment updated successfully',
            'data' => $payment,
        ], 200);
    }

    // Menghapus pembayaran
    public function destroy($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return response()->json([
                'message' => 'Payment not found',
            ], 404);
        }

        // Hapus gambar jika ada
        if ($payment->image && Storage::exists('public/' . $payment->image)) {
            Storage::delete('public/' . $payment->image);
        }

        $payment->delete();

        return response()->json([
            'message' => 'Payment deleted successfully',
        ], 200);
    }
}
