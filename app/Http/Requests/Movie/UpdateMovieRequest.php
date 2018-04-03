<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'year' => 'required',
            'network_id' => 'nullable|exists:networks,id',
            'base_link' => 'required',
            'image' => 'image'
        ];
    }
}
