<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveItem extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'type_item_id' => 'required|integer',
            'quantite_id' => 'required|integer',
            'lot_id' => 'required|integer',
            'numero_unique' => 'required|integer',
            'status_item_id' => 'required|integer',
            'etat_item_id' => 'required|integer',
            'localisation_id' => 'required|integer',

        ];
    }
}
