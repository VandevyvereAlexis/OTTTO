<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'commentaire',
        'initiateur_id',
        'destinataire_id',
    ];

    public function initiateur() {
        return $this->belongsTo(User::class, 'initiateur_id');
    }

    public function destinataire() {
        return $this->belongsTo(User::class, 'destinataire_id');
    }
}
