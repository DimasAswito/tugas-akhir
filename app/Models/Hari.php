<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'hari';

    protected $fillable = [
        'nama_hari',
    ];

    public $timestamps = false;
}