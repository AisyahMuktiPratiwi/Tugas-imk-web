<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //

      // Menampilkan semua menu
      public function index()
      {
          $menus = Menu::all();
  
          return response()->json([
              'message' => 'List of menus',
              'data' => $menus,
          ], 200);
      }
  
      // Menampilkan detail menu berdasarkan ID
      public function show($id)
      {
          $menu = Menu::find($id);
  
          if (!$menu) {
              return response()->json([
                  'message' => 'Menu not found',
              ], 404);
          }
  
          return response()->json([
              'message' => 'Menu details',
              'data' => $menu,
          ], 200);
      }
 
      public function store(Request $request)
      {
  
          $request->validate([
              'name' => 'required|string',
              'description' => 'required|string',
              'price' => 'required|numeric',
              'category' => 'required|string',
              'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
          $imagePath = null;
          if ($request->hasFile('image')) {
              $imagePath = $request->file('image')->store('menus', 'public');
          }
  
          // Membuat menu baru
          $menu = Menu::create([
              'name' => $request->name,
              'description' => $request->description,
              'price' => $request->price,
              'category' => $request->category,
              'image' => $imagePath, 
          ]);
  
          return response()->json([
              'message' => 'Menu created successfully',
              'data' => $menu,
          ], 201);
      }
  
      // Mengupdate menu
      public function update(Request $request, $id)
      {
          $menu = Menu::find($id);
  
          if (!$menu) {
              return response()->json([
                  'message' => 'Menu not found',
              ], 404);
          }
  
          // Validasi input
          $request->validate([
              'name' => 'required|string',
              'description' => 'required|string',
              'price' => 'required|numeric',
              'category' => 'required|string',
              'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
        
          $imagePath = $menu->image;
          if ($request->hasFile('image')) {
            
              if ($imagePath && file_exists(public_path('storage/' . $imagePath))) {
                  unlink(public_path('storage/' . $imagePath));
              }
  
              // Simpan gambar baru
              $imagePath = $request->file('image')->store('menus', 'public');
          }
  
          // Update menu
          $menu->update([
              'name' => $request->name,
              'description' => $request->description,
              'price' => $request->price,
              'category' => $request->category,
              'image' => $imagePath, // Menyimpan path gambar
          ]);
  
          return response()->json([
              'message' => 'Menu updated successfully',
              'data' => $menu,
          ], 200);
      }
  
      // Menghapus menu
      public function destroy($id)
      {
          $menu = Menu::find($id);
  
          if (!$menu) {
              return response()->json([
                  'message' => 'Menu not found',
              ], 404);
          }
  
          if ($menu->image && file_exists(public_path('storage/' . $menu->image))) {
              unlink(public_path('storage/' . $menu->image));
          }
  
          $menu->delete();
  
          return response()->json([
              'message' => 'Menu deleted successfully',
          ], 200);
      }
}
