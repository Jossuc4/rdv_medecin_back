<?php

namespace App\Http\Controllers;

use App\Models\Matrimodel;
use Illuminate\Http\Request;

class MatriController extends Controller
{
    public function index()
    {
        return Matrimodel::all();
    }

    public function create(Request $request)
    {
        $created = Matrimodel::create(
            [
                "situation" => $request->input("situation")
            ]
        );

        return Matrimodel::all();
    }
}
