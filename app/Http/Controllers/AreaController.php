<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AreaController extends Controller
{
      
    public function index()
    {
        try {
           
            $areas = Area::all();
      
            return response()->json([
                'message' => 'Areas fetched successfully',
                'data' => $areas
            ], 200);
        } catch (\Exception $e) {
          
            return response()->json([
                'message' => 'Failed to fetch areas',
                'error' => $e->getMessage()
            ], 500);
        }
    }

  
    public function store(Request $request)
    {
        try {
           
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'image' => 'nullable|image|max:2048',
            ]);

       
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('areas', 'public');
            }

            $area = Area::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $imagePath,
            ]);

            return response()->json([
                'message' => 'Area created successfully',
                'data' => $area
            ], 201); 
        } catch (ValidationException $e) {
       
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
       
            return response()->json([
                'message' => 'Failed to create area',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $area = Area::findOrFail($id);
           
            return response()->json([
                'message' => 'Area details fetched successfully',
                'data' => $area
            ], 200);
        } catch (\Exception $e) {
          
            return response()->json([
                'message' => 'Area not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    // Mengupdate area
    public function update(Request $request, $id)
    {
        try {
            $area = Area::findOrFail($id);

            $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|required|string',
                'price' => 'sometimes|required|numeric',
                'image' => 'nullable|image|max:2048',
            ]);

            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($area->image) {
                    Storage::disk('public')->delete($area->image);
                }

                $imagePath = $request->file('image')->store('areas', 'public');
                $area->image = $imagePath;
            }

       
            $area->update($request->only(['name', 'description', 'price', 'image']));

    
            return response()->json([
                'message' => 'Area updated successfully',
                'data' => $area
            ], 200); 
        } catch (\Exception $e) {
          
            return response()->json([
                'message' => 'Failed to update area',
                'error' => $e->getMessage()
            ], 500); 
        }
    }

    // Menghapus area
    public function destroy($id)
    {
        try {
            $area = Area::findOrFail($id);

            if ($area->image) {
                Storage::disk('public')->delete($area->image);
            }

            $area->delete();

        
            return response()->json([
                'message' => 'Area deleted successfully'
            ], 200); 
        } catch (\Exception $e) {
            
            return response()->json([
                'message' => 'Failed to delete area',
                'error' => $e->getMessage()
            ], 500); 
        }
    }
}
