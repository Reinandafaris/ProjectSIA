<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasKeluar extends Model
{
  protected $table = "kas_keluar";
  protected $fillable = [
    'id', 'nokk', 'tglkk', 'memokk', 'jmkk'
  ];
}
