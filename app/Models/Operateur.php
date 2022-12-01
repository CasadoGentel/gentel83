<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'num_operateur',
        'raison_sociale',
        'adresse',
        'complement_adresse',
        'code_postal',
        'ville',
        'is_abonne',
        'date_fin_demo',
        'rel_id_param_mail',
        'rel_id_configuration',
        'jeton',
        'rel_id_mail_facture',
        'taille_max_rep'


    ];
}
