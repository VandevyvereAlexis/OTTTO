<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'initiateur_id',
        'destinataire_id',
        'annonce_id',
    ];

    public function initiateur() {
        return $this->belongsTo(User::class, 'initiateur_id');
    }

    public function destinataire() {
        return $this->belongsTo(User::class, 'destinataire_id');
    }

    public function annonce() {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
}
