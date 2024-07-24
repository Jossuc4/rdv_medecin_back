<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreRequest;
use App\Models\Livre;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class LivreController extends Controller
{
    public function displayAll(): View
    {
        return view('livres', [
            'livres' => Livre::paginate(1)
        ]);
    }

    public function create(): Livre
    {
        $validator = Validator::make(
            [
                "titre" => "Nos enfants",
                "auteur" => "Larry Jossuca",
                "pages" => 2500,
                "disponibility" => true
            ],
            LivreRequest::rules()
        );

        dd($validator->Validated());
        $livre = Livre::create(
            [
                "titre" => "Nos enfants",
                "auteur" => "Larry Jossuca",
                "pages" => 2500,
                "disponibility" => true
            ]
        );

        return $livre;
    }
}
