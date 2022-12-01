<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Configuration extends Model
{
    protected $fillable = [
          'id_configuration',
          'suivi_statut_help',
          'nom_logo',
          'couleur_fond',
          'site_origine',
          'isHttps',
    ];
}
