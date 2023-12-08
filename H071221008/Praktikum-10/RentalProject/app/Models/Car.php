<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
// berelasi ke payment
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}