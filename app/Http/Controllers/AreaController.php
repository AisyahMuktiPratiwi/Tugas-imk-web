<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AreaController extends Controller
{
      
    public function index(request $request)
    {
            $areas = Area::all();
            if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Areas fetched successfully',
                'data' => $areas
            ], 200);
          
         
         }
        return view('admin.dataarea', compact('areas'));
    }
    public function edit($id)
      {
        $area = Area::find($id);
          return view('admin.editarea', compact('area'));
      }
    public function insert()
    {
      
        return view('admin.tambaharea');
    }
  
    public function store(Request $request)
    {

           
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
            if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Area created successfully',
                'data' => $area
            ], 201); 
        
            
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e->errors()
            ], 422);
    
       
            return response()->json([
                'message' => 'Failed to create area',
                'error' => $e->getMessage()
            ], 500);
        }
        return redirect()->route('area.index')->with('success', 'Area created successfully!');
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
    
            // Validasi input
            $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|required|string',
                'price' => 'sometimes|required|numeric',
                'image' => 'nullable|image|max:2048',
            ]);
    
            // Proses gambar jika ada file baru
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($area->image) {
                    Storage::disk('public')->delete($area->image);
                }
    
                // Simpan gambar baru
                $imagePath = $request->file('image')->store('areas', 'public');
                $area->image = $imagePath;
            }
    
            // Update data area, kecuali gambar jika tidak diunggah
            $updateData = $request->only(['name', 'description', 'price']);
            if (isset($imagePath)) {
                $updateData['image'] = $imagePath;
            }
    
            $area->update($updateData);
    
            $successResponse = [
                'message' => 'Area updated successfully',
                'data' => $area
            ];
    
            // Respons berdasarkan tipe permintaan
            if ($request->wantsJson()) {
                return response()->json($successResponse, 200);
            }
    
            return redirect()->route('area.index')->with('success', $successResponse['message']);
        } catch (\Exception $e) {
            $errorResponse = [
                'message' => 'Failed to update area',
                'error' => $e->getMessage()
            ];
    
            if ($request->wantsJson()) {
                return response()->json($errorResponse, 500);
            }
    
            return redirect()->back()->withErrors(['error' => $errorResponse['message']]);
        }
    }
    

    // Menghapus area
    public function destroy($id, Request $request)
    {
        $area = Area::find($id);
    
        if (!$area) {
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Area not found'], 404);
            }
    
            return redirect()->route('area.index')->with('error', 'area$area not found');
        }
    
        $area->delete();
    
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Area deleted successfully'], 200);
        }
    
        return redirect()->route('area.index')->with('success', 'Area deleted successfully');
    }
}
