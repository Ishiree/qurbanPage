<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HewanQurban extends Model
{
    use HasFactory;

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'hewan_qurban_id', 'id');
    }
}
