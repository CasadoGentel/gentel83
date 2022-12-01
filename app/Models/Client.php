<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'num_client',
        'raison_sociale',
        'adresse',
        'complement_adresse',
        'code_postal',
        'ville',
        'mdp_client',
        'acces_intranet',
        'mail_identifiant',
        'rel_operateur',
        'rel_client_gentel',
        'mail',
        'statut_client',
        'rattachement_client',
        'civilite',
        'nom',
        'prenom',
        'telephone',
        'site_extranet'
    ];
}
