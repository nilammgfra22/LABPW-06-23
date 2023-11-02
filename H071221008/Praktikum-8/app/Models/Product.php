<?php
// kedua, mengambil tabel dari database classicmodels
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // pembuatan data awal dalam tabel
    use HasFactory;
    protected $table = 'products';

}
