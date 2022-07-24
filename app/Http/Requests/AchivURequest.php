<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AchivURequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['string'],
            'cond'=>['string'],
            'img'=>['mime:png,jpg,jpeg,svg']
        ];
    }
}
