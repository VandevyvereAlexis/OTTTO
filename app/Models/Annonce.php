<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'vendu',
        'visible',
        'prix',
        'image',
        'description',
        'nom_commune',
        'code_commune',
        'departement',
        'cv_fiscaux',
        'ch_din',
        'kilometrage',
        'annee',
        'mise_en_circulation',
        'premiere_main',
        'controle_technique',
        'energie',
        'type',
        'etat',
        'place',
        'porte',
        'transmission',
        'user_id',
        'couleur_id',
        'marque_id',
        'euro_id',
        'critair_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function couleur() {
        return $this->belongsTo(Couleur::class);
    }

    public function marque() {
        return $this->belongsTo(Marque::class);
    }

    public function euro() {
        return $this->belongsTo(Euro::class);
    }

    public function critair() {
        return $this->belongsTo(Critair::class);
    }
}
