<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RDVTypeModel;

class RDVTypeController extends Controller
{
    public function index()
    {
        return RDVTypeModel::all();
    }

    public function create(Request $request)
    {
        $newRT = RDVTypeModel::create(
            [
                "type_rdv" => $request->input("type_rdv")
            ]
        );

        return $newRT;
    }

    public function delete(Request $request)
    {
        $actualRT = RDVTypeModel::find($request->input("id_rdv_type"));
        $actualRT->delete();

        return RDVTypeModel::all();
    }
}
