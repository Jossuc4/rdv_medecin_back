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
}
