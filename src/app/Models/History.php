<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';

    protected $fillable = [
        'explorer_id',
        'latitude',
        'longitude',
    ];

    public function explorer()
    {
        return $this->belongsTo(explorer::class);
    }
}
