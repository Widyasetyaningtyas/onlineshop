<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Keranjang;
use App\Checkout;
use App\User;
use Auth;
class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checkout = Checkout::where('user_id', Auth::user()->id)->get();
        // $checkout->bukti_pembayaran = $request->bukti_pembayaran;
        // $checkout->save();
        return view('history.index', compact('checkout'));
        // $data['keranjang']=Keranjang::find($id);
        // return view('history.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::where('id',$id)->first();

        $checkout = new Checkout;
        $checkout->user_id = Auth::user()->id;
        $checkout->fullname = $request->fullname;
        $checkout->provinsi = $request->provinsi;
        $checkout->kabupaten = $request->kabupaten;
        $checkout->kecamatan = $request->kecamatan;
        $checkout->alamat_rumah = $request->alamat_rumah;
        $checkout->no_hp = $request->no_hp;
        $checkout->metode = $request->metode;
        $checkout->nama_barang = $request->input_nama_barang;
        $checkout->harga = $request->input_harga;
        $checkout->ongkir = $request->input_ongkir;
        $checkout->status = "Not Yet Paid";
        $checkout->jumlah = $request->input_jumlah;
        $checkout->jumlah_harga = $request->input_jumlah_harga;
        $checkout->total = $request->input_total;
        $checkout->save();
        return redirect('history');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['checkout']= Checkout::find($id);
        return view('history.detail_history',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $checkout=  Checkout::find($id);
        $checkout->fill($request->all());
        $checkout->update();
        return redirect('history');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
