<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticle extends FormRequest
{
   @return bool

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
            'text'=>"required",
            'short_text'=>"required",
            'author_name'=>"required"

        ];
    }
}
