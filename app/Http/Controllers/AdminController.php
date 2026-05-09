<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        
        if (!session('is_admin')) {
            return redirect('/admin/login');
        }   

        return view('admin.index', [
            'totalOrders' => Order::count(),
            'totalVideos' => Video::count(),
            'todayOrders' => Order::whereDate('created_at', Carbon::today())->count(),
            'latestOrders' => Order::latest()->take(4)->get(),
            'videos' => Video::latest()->take(4)->get(),
        ]);
    }

    public function login(Request $request)
    {
        if (
            $request->email === env('ADMIN_EMAIL') &&
            $request->password === env('ADMIN_PASSWORD')
        ) {
            session(['is_admin' => true]);
            return redirect('/admin');
        }

        return back()->with('error', 'Email atau password salah!');
    }


    public function logout()
    {
    session()->forget('is_admin');
    return redirect('/admin/login');
    }

}
