<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Cek apakah CREATE atau UPDATE
        if ($this->method() == 'PATCH') {
            $id_mobil_rules    = 'required|string|size:4|unique:mobil,id_mobil,' . $this->get('id');
        } else {
            $id_mobil_rules    = 'required|string|size:4|unique:mobil,id_mobil';
            
        }

        return [
            'id_mobil'    => $id_mobil_rules,
            'nama_mobil'  => 'required|string|max:50',
            'harga'         => 'required|string|max:10',
            'tahun'         => 'required|numeric',
            'id_produsen'   => 'required',
            'foto'          => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ];
    }
}
