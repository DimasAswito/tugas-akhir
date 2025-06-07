<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'ruangan';

    protected $fillable = [
        'nama_ruangan',
    ];

    public $timestamps = false;
}