<?php

namespace App\Http\Controllers\medecin;

use App\Http\Controllers\Controller;
use App\Models\MedecinModel;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function index()
    {
        return MedecinModel::all();
    }

    public function create(Request $request)
    {
        $created = MedecinModel::create(
            [
                'nom_medecin' => $request->input('nom_medecin'),
                'contact_medecin' => $request->input('contact_medecin'),
                'idspec' => $request->input('idspec')
            ]
        );

        return MedecinModel::all();
    }

    public function delete(Request $request)
    {
        $concerned = MedecinModel::find($request->input('id_medecin'));

        $concerned->delete();

        return MedecinModel::all();
    }

    public function modif(Request $request)
    {
        $concerned = MedecinModel::find($request->input('id_medecin'));
        $concerned->update(
            [
                'nom_medecin' => $request->input('nom_medecin'),
                'contact_medecin' => $request->input('contact_medecin'),
                'idspec' => $request->input('idspec')
            ]
        );

        return $concerned;
    }
}
