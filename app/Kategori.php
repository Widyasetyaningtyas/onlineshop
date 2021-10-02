<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','nama_kategori','gambar');

    
}
