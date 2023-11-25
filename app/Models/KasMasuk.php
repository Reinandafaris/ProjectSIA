<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
  protected $table = "kas_masuk";
  protected $fillable = [
    'id', 'nokm', 'tglkm', 'memokm', 'jmkmd'
  ];
}
