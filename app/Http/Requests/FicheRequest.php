<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FicheRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nom_patient" => "required",
            "prenom_patient" => "required",
            "sexe_patient" => "required",
            "adresse" => "required",
            "phone" => "required",
            "mail" => "required",
            "date_naissance" => "required",
            "situation" => "required",
            "groupe_sang" => "required",
            "antecedent" => "required",
            "deces" => "required"
        ];
    }
}
