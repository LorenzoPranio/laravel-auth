<?php

namespace  App\Http\Requests;

use  Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends  FormRequest
{
    /**
     * Determine if the user is  authorized to make this request.
     * 
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules  that apply to the request.
     * 
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:200',
            'summary' => 'nullable|string'
        ];
    }

    public  function messages()
    {
        return[
            'name.require' => 'Il nome del progetto  è obbligatorio.',
            'name.max' => 'Il nome del progetto non può superare i 200 caratteri'
        ];
    }
}




