<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'lu',
        'texte',
        'auteur_id',
        'conversation_id',
    ];

    public function auteur() {
        return $this->belongsTo(User::class);
    }

    public function conversation() {
        return $this->belongsTo(Conversation::class);
    }
}
