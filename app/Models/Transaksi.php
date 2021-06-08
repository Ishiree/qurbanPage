<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'hp', 'jumlah_hewan', 'hewan_qurban_id', 'donasi', 'status', 'metode_pembayaran'];

    public function HewanQurban()
    {
        return $this->hasMany(HewanQurban::class, 'hewan_qurban_id', 'id');
    }
}
