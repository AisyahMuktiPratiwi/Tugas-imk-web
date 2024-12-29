<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //

      // Menampilkan semua menu
      public function index(Request $request)
      {
          $menus = Menu::all();
  
          if ($request->wantsJson()) {
          return response()->json([
              'message' => 'List of menus',
              'data' => $menus,
          ], 200);

        }
        return view('admin.datamenu', compact('menus'));
      }
  
      // Menampilkan detail menu berdasarkan ID
    //   public function show($id, Request $request)
    //   { $menu = Menu::find($id);
    //         if ($request->wantsJson()) {
        
    //             if (!$menu) {
    //                 return response()->json([
    //                     'message' => 'Menu not found',
    //                 ], 404);
    //             }
        
    //             return response()->json([
    //                 'message' => 'Menu details',
    //                 'data' => $menu,
    //             ], 200);
    //          }

    // }
      public function insert()
      {
        
          return view('admin.tambahmenus');
      }
      public function store(Request $request)
      {
  
          $request->validate([
              'name' => 'required|string',
              'description' => 'required|string',
              'price' => 'required|numeric',
              'category' => 'required|string',
              'kcal' => 'required|integer',
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
              'kcal' => $request->kcal,
              'image' => $imagePath, 
          ]);
          if ($request->wantsJson()) {
          return response()->json([
              'message' => 'Menu created successfully',
              'data' => $menu,
          ], 201);


        }
        return redirect()->route('menu.index')->with('success', 'Menu created successfully!');
      }
  
      public function edit($id)
      {
        $menus = Menu::find($id);
          return view('admin.editmenus', compact('menus'));
      }
      // Mengupdate menu
      public function update(Request $request, $id)
      {
          $menu = Menu::find($id);
      
          if (!$menu) {
              $errorMessage = ['error' => 'Menu not found'];
              return $request->wantsJson() 
                  ? response()->json($errorMessage, 404) 
                  : redirect()->back()->withErrors($errorMessage);
          }
      
          $validatedData = $request->validate([
              'name' => 'required|string',
              'description' => 'required|string',
              'price' => 'required|numeric',
              'category' => 'required|string',
              'kcal' => 'required|integer',
              'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
      
          $imagePath = $menu->image;
      
          // Handle image upload if present
          if ($request->hasFile('image')) {
              if ($imagePath && file_exists(public_path('storage/' . $imagePath))) {
                  unlink(public_path('storage/' . $imagePath)); // Delete old image
              }
              $imagePath = $request->file('image')->store('menus', 'public'); // Store new image
          }
      
          // Update menu details
          $menu->update(array_merge($validatedData, ['image' => $imagePath]));
      
          $responseMessage = [
              'success' => true,
              'message' => 'Menu updated successfully!',
              'data' => $menu,
          ];
      
          return $request->wantsJson()
              ? response()->json($responseMessage)
              : redirect()->route('menu.index')->with('success', $responseMessage['message']);
      }
      
      
  
      // Menghapus menu
      public function destroy($id, Request $request)
      {
          $menu = Menu::find($id);
      
          if (!$menu) {
              if ($request->wantsJson()) {
                  return response()->json(['message' => 'Comment not found'], 404);
              }
      
              return redirect()->route('comment.index')->with('error', 'Comment not found');
          }
      
          $menu->delete();
      
          if ($request->wantsJson()) {
              return response()->json(['message' => 'Menu deleted successfully'], 200);
          }
      
          return redirect()->route('menu.index')->with('success', 'Menu deleted successfully');
      }
}
