<?php

namespace App\Http\Controllers;

use App\Models\RDVModel;
use Illuminate\Http\Request;

class RDVController extends Controller
{
    public function index()
    {
        return RDVModel::all();
    }

    public function create(Request $request)
    {
        RDVModel::create(
            [
                'id_medecin' => $request->input('id_medecin'),
                'id_fiche' => $request->input('id_fiche'),
                'raison' => $request->input('raison'),
                'date_rdv' => $request->input('date_rdv'),
                'type_id' => $request->input('type_id')
            ]
        );
    }

    public function report(Request $request)
    {
        $rdv = RDVModel::find($request->input('id_rdv'));

        $rdv->update(
            [
                'id_medecin' => $request->input('id_medecin'),
                'id_fiche' => $request->input('id_fiche'),
                'raison' => $request->input('raison'),
                'date_rdv' => $request->input('date_rdv'),
                'type_id' => $request->input('type_id')
            ]
        );

        return $rdv;
    }
}
