<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table='checkout';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','product_id','keranjang_id','user_id','waktu_bayar','total','metode','ongkir','alamat','status','bukti_pembayaran');

    public function customer()
    {
    	return $this->belongsTo('App\Customer','checkout_id','id');
    }
}
