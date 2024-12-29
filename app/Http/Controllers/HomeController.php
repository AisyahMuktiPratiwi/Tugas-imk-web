<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Invoice;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlahkomentar = Comment::count();
        $jumlahreservasi = Invoice::count();
        $jumlahmenu= Menu::count();
        return view('admin.dashboardadmin', compact('jumlahkomentar', 'jumlahreservasi', 'jumlahmenu'));
      
    }
}
