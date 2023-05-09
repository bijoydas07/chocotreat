<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $sliderValidationRole = 'mimes:mimes:jpeg,png,jpg,gif|max:2000';
        if($this->isMethod('post')){
            $sliderValidationRole = 'required|'. $sliderValidationRole;
        }
        return [
            'heading'=> ['required'],
            'description'=> ['required'],
            'image'=> $sliderValidationRole,
        ];
    }
}
