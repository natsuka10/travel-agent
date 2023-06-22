<?php

namespace App\Http\Requests\Admin;

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
        switch ($this->method()) {
            case 'POST':
            {    
                return [
                    'judul'     => ['required'],
                    'subjudul'    => ['required'],
                    'image' => ['required','image']
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'judul'    => ['required','unique:sliders,judul,' . request()->route('slider')->id],
                    'subjudul'    => ['required'],
                    'image' => ['image']
                ];                
            }
            default: break;
        }
    }
}
