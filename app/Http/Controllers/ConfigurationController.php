<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Operateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    public function index()
    {

        //TO DO définir l'id du compte de l'opérateur du compte avec l'auth
   $idOp = 1;
   $configuration = Configuration::where('id', '=', $idOp)->get();

        return view("configuration.index", compact("configuration"));
    }

    public function create()
    {
        return view('configuration.edit');
    }


    public function store(Request $request)
    {
        $request->validate($request,[
            'id_configuration' => 'required',
         // 'suivi_statut_help',
          'nom_logo'=>'bail|required|image|max:1024',
           'couleur_fond',
          'site_origine',
         // 'isHttps'
        ]);

        $chemin_image = $request->nom_logo->store("configuration");

        Configuration::create(
            [
                'id_configuration' => $request->id_configuration,
            //  'suivi_statut_help'=> $request->couleur_fond,
              'nom_logo' => $chemin_image,
              'couleur_fond' => $request->couleur_fond,
              'site_origine' => $request->site_origine,
            //  'isHttps' => $request->isHttps
            ]
        );

        return redirect()->route('configuration.index')
                        ->with('success','Configuration created successfully.');
    }

    public function show(Configuration $configuration)
    {
        return view("configuration.show", compact("configuration"));
    }

    public function edit(Configuration $configuration)
    {

        return view('configuration.edit',compact('configuration'));
    }

    public function update(Request $request, Configuration $configuration)
    {
      /*  $request->validate([
            'id_configuration' => 'required',
          'suivi_statut_help',
          'nom_logo',
          'couleur_fond',
          'site_origine',
          'isHttps'
        ]);
        $product->update($request->all());
        return redirect->route('configuration.index')
        ->with('success','Configuration modifiée avec succès');*/

        $rules = [
            'couleur_fond' => 'bail',
            'site_origine' => 'bail',
            'nom_logo' => 'bail|image|max:1024'
        ];
        // Si une nouvelle image est envoyée
        if ($request->has("nom_logo")) {
            // On ajoute la règle de validation pour "picture"
            $rules["nom_logo"] = 'bail|image|max:1024';
        }

        $this->validate($request, $rules);

           // 2. On upload l'image dans "/storage/app/public/posts"
            if ($request->has("nom_logo")) {

                //On supprime l'ancienne image
                Storage::delete($configuration->nom_logo);

                $chemin_image = $request->nom_logo->store("configuration");
            }


            // 3. On met à jour les informations du Post
            $configuration->update([
                "nom_logo" => isset($chemin_image) ? $chemin_image : $configuration->nom_logo,
                "couleur_fond" => $request->couleur_fond,
                "site_origine" => $request->site_origine
            ]);

            // 4. On affiche le Post modifié : route("configuration.show")
            return redirect(route("configuration.index", $configuration));

    }

    public function destroy(Configuration $configuration)
    {
        Storage::delete($configuration->nom_logo);
        $configuration->delete();

        return redirect()->route('configuration.index')
                        ->with('success','Configuration effacé avec succès');
    }



}
