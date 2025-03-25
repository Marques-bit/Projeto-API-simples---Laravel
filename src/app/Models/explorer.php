<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class explorer extends Model
{
    use HasFactory;

    protected $table = 'explorers';

    protected $fillable = [
        'nome',
        'idade',
        'latitude',
        'longitude',
    ];

    public function items()
    {
        return $this->hasMany(item::class);
    }
}
