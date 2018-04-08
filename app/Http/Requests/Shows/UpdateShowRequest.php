<?php

namespace App\Http\Requests\Shows;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShowRequest extends FormRequest
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
        return [
            'genres' => 'required',
            'name' => 'required',
            'description' => 'required',
            'runtime' => 'required|numeric',
            'start_year' => 'required',
            'end_year' => 'required',
            'network_id' => 'nullable|exists:networks,id',
            'image' => 'image',
        ];
    }
}
