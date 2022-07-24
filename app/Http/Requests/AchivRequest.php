<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class AchivRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required', 'string'],
            'cond'=>['required', 'string'],
            'img'=>['required', 'mime:png,jpg,jpeg,svg']
        ];
    }

    protected function failedValidation(Validator $val){
        if($this->expectsJson()){
            $error = (new ValidationException($val))->errors();
            throw new HttpResponseException(
                response()->json([
                    'status'=>false,
                    'message'=>$error,
                ])->setStatusCode(401, 'creating error')
            );

        }

        parent::failedValidation($val);
    }

    public function messages(){
        return [
            'title.unique'=>'This title is already taken',
            'title.required'=>'This field is required',
            'anons.required'=>'This field is required',
            'author.required'=>'This field is required',
            'title.string'=>'This field must be a string',
            'anons.string'=>'This field must be a string',
            'author.string'=>'This field must be a string',
            'genres.array'=>'This field must be an array',
            'image.mimes'=>"The file must be .jpg or .png"
        ];
    }
}
