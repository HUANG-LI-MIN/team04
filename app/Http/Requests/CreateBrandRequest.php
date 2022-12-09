<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
            'brand' => 'required|string|min:2|max:191',
            'nationality' => 'required',
            'time' => 'required',
            'places' =>'required', 
            'ceo' =>'required' ,
            
        ];
    }
    public function messages()
    {
        return [
            "brand.required" => "汽車品牌 為必填",
            "brand.min" => "汽車品牌 至少需2個字元",
            "nationality.required" => "國家 為必填",
            "time.required" => "創立時間 為必填,  ",
            "places.required" => "總部 為必填",
            "ceo.required" => "創辦人 為必填",
        ];
    }
}
