<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'title'=> ['required'],
        ];
        //  if fileType is audio
    if ($this->input('fileType') == 'audio') {
        $rules['file'] = 'mimes:mp3,mp4';
    }

    //if fileType is video
    if ($this->input('fileType') == 'video') {
         $rules['file'] = 'mimes:mp4,3gp';

    }
    return $rules;
    }
}
