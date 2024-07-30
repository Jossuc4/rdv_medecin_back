<?php

namespace App\Http\Controllers\medecin;

use App\Http\Controllers\Controller;
use App\Models\MedecinModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $account = User::create(
            [
                "name" => $request->input('nom_medecin'),
                "mail" => $request->input('nom_medecin'),
                "password" => Hash::make($request->input('nom_medecin'))
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
