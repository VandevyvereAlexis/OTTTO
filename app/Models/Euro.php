<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Euro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function annonce() {
        return $this->hasMany(Annonce::class);
    }
}
