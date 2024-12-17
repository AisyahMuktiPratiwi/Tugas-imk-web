<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Menampilkan semua komentar
    public function index()
    {
        $comments = Comment::all();

        return response()->json([
            'message' => 'List of comments',
            'data' => $comments,
        ], 200);
    }

    // Menampilkan detail komentar berdasarkan ID
    public function show($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                'message' => 'Comment not found',
            ], 404);
        }

        return response()->json([
            'message' => 'Comment details',
            'data' => $comment,
        ], 200);
    }

    // Menyimpan komentar baru
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
            'customer_id' => 'required|exists:customers,id',
        ]);

        // Membuat komentar baru
        $comment = Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'customer_id' => $request->customer_id,
        ]);

        return response()->json([
            'message' => 'Comment created successfully',
            'data' => $comment,
        ], 201);
    }

    // Mengupdate komentar
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                'message' => 'Comment not found',
            ], 404);
        }

       
        $request->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
            'customer_id' => 'required|exists:customers,id',
        ]);

        // Update komentar
        $comment->update([
            'name' => $request->name,
            'comment' => $request->comment,
            'customer_id' => $request->customer_id,
        ]);

        return response()->json([
            'message' => 'Comment updated successfully',
            'data' => $comment,
        ], 200);
    }

    // Menghapus komentar
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                'message' => 'Comment not found',
            ], 404);
        }

        $comment->delete();

        return response()->json([
            'message' => 'Comment deleted successfully',
        ], 200);
    }
}
