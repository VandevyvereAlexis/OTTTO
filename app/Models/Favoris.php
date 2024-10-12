<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'annonce_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function annonce() {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
}
