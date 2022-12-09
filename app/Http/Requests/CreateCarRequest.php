<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'type' => 'required|string|min:2|max:191',
            'bid' => 'required',
            'horsepower' => 'nullable',
            'cc' =>'required', 
            'money' =>'required|numeric|min:50|max:99999' ,
            'variable_s' => 'required|string|min:4|max:10',
            'seats' => 'nullable', 
            
        ];
    }
    public function messages()
    {
        return [
            "type.required" => "車子名稱 為必填",
            "type.min" => "車子名稱 至少需2個字元",
            "bid.required" => "品牌名稱 為必填",
            "cc.required" => "CC數 為必填,  電動車請輸入0",
            "money.required" => "價錢 為必填",
            "money.min" => "價錢 範圍必須介於50~99999之間",
            "money.max" => "價錢 範圍必須介於50~99999之間",
            "variable_s.required" => "變速系統 為必填",
            "variable_s.min" => "變速系統 範圍必須介於70~200之間",
            
        ];
    }
}
