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
            'jenis_jasa' => 'required|in:event,wisata',
            'paket' => 'required',
            'tanggal_acara' => 'required|date'
        ]);

        $harga = 0;

        switch ($request->paket) {
            case '1_day':
                $harga = 500000;
                break;
            case '2_day':
                $harga = 800000;
                break;
            case '3_day':
                $harga = 1300000;
                break;
            case 'bali':
                $harga = 1550000;
                break;
        }

        if ($request->drone) {
            $harga += 250000;
        }

        if ($request->fast_edit) {
            $harga += 150000;
        }

        $order = Order::create([
            'nama_client' => $request->nama_client,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jenis_jasa' => $request->jenis_jasa,
            'paket' => $request->paket,
            'tanggal_acara' => $request->tanggal_pemesanan,
            'catatan' => $request->catatan,

            'drone' => $request->drone ? 1 : 0,
            'fast_edit' => $request->fast_edit ? 1 : 0,
            'total_harga' => $harga
        ]);
        
        return redirect('/orders/sukses/' . $order->id);
    }


    public function sukses($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.sukses', compact('order'));
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

    public function uploadForm($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.upload', compact('order'));
    }

    public function uploadBukti(Request $request, $id)
    {
        $request->validate([
            'bukti' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $order = Order::findOrFail($id);

        $file = $request->file('bukti');
        $path = $file->store('bukti', 'public');

        $order->update([
            'bukti_transfer' => $path,
            'status' => 'menunggu'
        ]);

        return redirect('/')->with('success', 'Bukti berhasil diupload!');
    }

}