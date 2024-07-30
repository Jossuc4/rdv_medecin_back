<?php

namespace App\Http\Controllers;

use App\Models\FicheModel;
use App\Models\RDVModel;
use Illuminate\Http\Request;

class RDVController extends Controller
{

    private function defineGenre($sexe)
    {
        return ($sexe === "M") ? [
            "subject" => "monsieur",
            "adj" => "Cher"
        ] : [
            "subject" => "madame",
            "adj" => "Chère"
        ];
    }
    public function index()
    {
        return RDVModel::all();
    }

    public function create(Request $request)
    {
        $created = RDVModel::create(
            [
                'id_medecin' => $request->input('id_medecin'),
                'id_fiche' => $request->input('id_fiche'),
                'raison' => $request->input('raison'),
                'date_rdv' => $request->input('date_rdv'),
                'type_id' => $request->input('type_id')
            ]
        );

        return $created;
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

    public function cancel(Request $request)
    {
        $rdv = RDVModel::find($request->input("id_rdv"));
        $patient = FicheModel::find($rdv["id_fiche"]);
        $dest_mail = $patient["mail"];

        $message = join(" ", $this->defineGenre($patient["sexe"])) . $patient["nom_patient"];

        $rdv->delete();

        $mail_sent = mail($dest_mail, "Annulation de rendez-vous", $message);

        return [
            "sent" => $mail_sent,
            "message" => $message
        ];
    }
}
