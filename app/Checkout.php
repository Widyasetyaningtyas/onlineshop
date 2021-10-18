<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table='checkout';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','keranjang_id','user_id','fullname','waktu_bayar','total','metode','ongkir','provinsi','kecamatan','kabupaten','alamat_rumah','status','jumlah','jumlah_harga','bukti_pembayaran');

    public function customer()
    {
    	return $this->belongsTo('App\Customer','checkout_id','id');
    }
}
