<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class PokemonRequet extends FormRequest
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
            'name' => 'required|string|max:255',
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'description' => 'required|string',
            'hp' => 'required|integer|min:0|max:100',
            'attack' => 'required|integer|min:0|max:100',
            'defense' => 'required|integer|min:0|max:100',
            'speed' => 'required|integer|min:0|max:100',
            'special_attack' => 'required|integer|min:0|max:100',
            'special_defense' => 'required|integer|min:0|max:100',
            'type_id' => 'required|exists:pokemom_type,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên là trường bắt buộc.',
            'weight.required' => 'Cân nặng là trường bắt buộc.',
            'height.required' => 'Chiều cao là trường bắt buộc.',
            'hp.required' => 'Máu là trường bắt buộc.',
            'description.required' => 'Thông tin mô tả là trường bắt buộc.',
            'attack.required' => 'Tấn công là trường bắt buộc.',
            'defense.required' => 'Phòng thủ là trường bắt buộc.',
            'speed.required' => 'Tốc độ là trường bắt buộc.',
            'special_attack.required' => 'Đòn tấn công đặc biệt là trường bắt buộc.',
            'special_defense.required' => 'Phòng thủ đặc biệt là trường bắt buộc.',
            'type_id.required' => 'Hệ là trường bắt buộc.',
            'type_id.exists' => 'Hệ không hợp lệ.',
        ];
    }
    protected function failedValidation( Validator $validator )
    {
        throw ( new ValidationException($validator) )
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
