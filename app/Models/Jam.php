<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'jam';

    protected $fillable = [
        'jam_mulai',
        'jam_selesai',
    ];

    public $timestamps = false;
}