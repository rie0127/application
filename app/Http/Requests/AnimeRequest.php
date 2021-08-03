<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimeRequest extends FormRequest
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
        if('anime.watched'){
        return [
            'anime.title'=>'required|string|max:50',
            'anime.date' =>'required|date',
            'anime.evaluation'=>'required|',
            'anime.feeling'=>'required|string',
            'anime.category_id'=>'required|'
        ];
       }
       else{
        return [
            'anime.title'=>'required|string|max:50',
            'anime.date'=>'required|date',
            'anime.evaluation'=>'nullable',
            'anime.feeling'=>'required|string',
            'anime.category_id'=>'nullable'
         ];
       }
    }
}
