<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'namakamar';
    }

    /**
     * penghuni
     *
     * @return void
     */
    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class);
    }

    /**
     * absensis
     *
     * @return void
     */
    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }
}
