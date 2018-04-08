<?php

namespace App\Http\Requests\Seasons;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeasonRequest extends FormRequest
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
            'number' => 'required|unique:seasons,number,'.$this->route('season'),
            'year' => 'required',
            'image' => 'image',
        ];
    }
}
