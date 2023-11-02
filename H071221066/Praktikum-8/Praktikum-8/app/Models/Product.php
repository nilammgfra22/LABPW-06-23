<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // hasfactory >> pembuatan data awal yang dapat digunakan untuk mengisi tabel-tabel dalam basis data
    use HasFactory;
    protected $table = 'products';        // mengakses produk dalam db

}
