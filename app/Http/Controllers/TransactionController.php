<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    // Read All - Admin
    public function index()
    {
        return response()->json(Transaction::with(['customer', 'book'])->get());
    }

    // Create - Customer
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'required|unique:transactions,order_number',
            'book_id' => 'required|exists:books,id',
            'total_amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $transaction = Transaction::create([
            'order_number' => $request->order_number,
            'customer_id' => $request->user()->id,
            'book_id' => $request->book_id,
            'total_amount' => $request->total_amount,
        ]);

        return response()->json($transaction, 201);
    }

    // Show - Customer
    public function show(Request $request, $id)
{
    $transaction = Transaction::with(['customer', 'book'])
        ->where('customer_id', $request->user()->id)
        ->find($id);

    if (!$transaction) {
        return response()->json([
            'message' => 'Transaksi tidak ditemukan'
        ], 404);
    }

    return response()->json($transaction);
}

    // Update - Customer
    public function update(Request $request, $id)
    {
        $transaction = Transaction::where('customer_id', $request->user()->id)
            ->find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'total_amount' => 'sometimes|required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $transaction->update($request->only('total_amount'));

        return response()->json($transaction);
    }

    // Destroy - Admin
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        $transaction->delete();

        return response()->json(['message' => 'Transaksi berhasil dihapus']);
    }
}