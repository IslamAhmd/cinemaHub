<?php

namespace App\Http\Requests\Episodes;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEpisodeRequest extends FormRequest
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
            'tv_shows_id' => 'required|exists:tv_shows,id',
            'seasons_id' => 'required|exists:seasons,id',
            'title' => 'required',
            'description' => 'required',
            'runtime' => 'required|numeric',
            'release_date' => 'required|date',
            'network_id' => 'nullable|exists:networks,id',
            'image' => 'image',
            'base_link' => 'required',
        ];
    }
}
