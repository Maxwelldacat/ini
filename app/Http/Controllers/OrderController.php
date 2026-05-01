<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // LIST SEMUA PEMESANAN (ADMIN)
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    // FORM TAMBAH PEMESANAN (USER)
    public function create()
    {
        return view('orders.create');
    }

    // SIMPAN PEMESANAN (USER SUBMIT)
    public function store(Request $request)
    {
        $request->validate([
            'nama_client' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'jenis_jasa' => 'required',
            'tanggal_pemesanan' => 'required|date'
        ]);

        Order::create($request->all());
        return redirect('/')->with('success', 'Pemesanan berhasil!');
    }

    // FORM EDIT (ADMIN)
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    // UPDATE (ADMIN)
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return redirect('/admin/orders')->with('success', 'Pemesanan diupdate!');
    }

    // DELETE (ADMIN)
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return redirect('/admin/orders')->with('success', 'Pemesanan dihapus!');
    }



    public function show($id)
    {
        $order = \App\Models\Order::findOrFail($id);
        return view('admin.orders.order-detail', compact('order'));
    }



}