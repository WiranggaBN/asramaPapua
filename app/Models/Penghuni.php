<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * data_kamars
     *
     * @return void
     */
    public function kamars()
    {
        return $this->hasMany(DataKamar::class);
    }
}
