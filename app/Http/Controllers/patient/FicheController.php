<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FicheModel;

class FicheController extends Controller
{
    /**
     * Ajouter un nouveau fiche malade
     * @param Request
     * @return Request
     */
    public function nouveau(Request $request)
    {
        // $created = FicheModel::create($request->post());
        // return $created;

        return $request->post();
    }

    public function index()
    {
        return FicheModel::all();
    }

    public function create(Request $request)
    {


        $created = FicheModel::create(
            [
                "nom_patient" => $request->input("nom_patient"),
                "prenom_patient" => $request->input("prenom_patient"),
                "sexe_patient" => $request->input("sexe_patient"),
                "adresse" => $request->input("adresse"),
                "phone" => $request->input("phone"),
                "mail" => $request->input("mail"),
                "date_naissance" => $request->input("date_naissance"),
                "situation" => $request->input("situation"),
                "groupe_sang" => $request->input("groupe_sang"),
                "antecedent" => $request->input("antecedent"),
                "deces" => $request->input("deces")
            ]
        );

        return FicheModel::all();
    }

    public function delete(Request $request)
    {
        $row = FicheModel::find($request->post('id'));

        $row->delete();

        return FicheModel::all();
    }

    public function modif(Request $request)
    {
        $row = FicheModel::find($request->post('id'));

        $row->update(
            [
                "nom_patient" => $request->input("nom_patient"),
                "prenom_patient" => $request->input("prenom_patient"),
                "sexe_patient" => $request->input("sexe_patient"),
                "adresse" => $request->input("adresse"),
                "phone" => $request->input("phone"),
                "mail" => $request->input("mail"),
                "date_naissance" => $request->input("date_naissance"),
                "situation" => $request->input("situation"),
                "groupe_sang" => $request->input("groupe_sang"),
                "antecedent" => $request->input("antecedent"),
                "deces" => $request->input("deces")
            ]
        );

        return $row;
    }
}
