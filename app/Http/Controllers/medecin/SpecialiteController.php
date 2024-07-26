<?php

namespace App\Http\Controllers\Medecin;

use App\Models\SpecialiteModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function index()
    {
        return SpecialiteModel::all();
    }

    public function ajouter(Request $request)
    {

        $created = SpecialiteModel::create(
            [
                "nom_spec" => $request->input("nom_spec")
            ]
        );

        return SpecialiteModel::all();
    }

    public function delete(Request $request)
    {
        $nom_spec = $request->input('nom_spec');

        // Delete the record where nom_spec equals the provided value
        SpecialiteModel::where('id_spec', 1)->delete();

        return SpecialiteModel::all();
    }
}
