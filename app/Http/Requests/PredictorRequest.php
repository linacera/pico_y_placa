<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Plate;
use App\Rules\Date;

class PredictorRequest extends FormRequest
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
            //
            'plate' => ['required','string','size:8', new Plate],
            'date' => ['required','string', new Date],
            'hour' => 'required|string|max:5'
        ];
    }
}
