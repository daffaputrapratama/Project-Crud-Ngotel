<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

<<<<<<< HEAD

    protected $table = 'kamar';

    protected $guarded = [];
=======
    protected $fillabel = [
        'namaKamar',
        'typeKamar',
        'fasilitasKamar',
        'interiorKamar',
    ];
>>>>>>> c402ebc7a7f6eae3c9e6d2135a502e3058100860
}
