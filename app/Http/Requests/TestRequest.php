<?php

namespace App\Http\Requests;

use Carbon\Traits\Localization;
use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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

            'name' => [
                'en' => 'required|unique:test,name,'.$this -> id,
                'ar' => 'required|unique:test,name,'.$this -> id,
                ],
            'logo' => [
                $this->getLocale('logo','en')=>'required|unique:test,logo,'.$this -> id,
                $this->getLocale('logo','ar')=>'required|unique:test,logo,'.$this -> id,
                ]
        ];


        /*  $rules =[];
          foreach (collect(config('app.locales')) as $locale){
              $rules = $rules + [
                  ('name', $locale) => 'required|unique:test,name'.$this -> id
                  ];
          }
          $trules =[];
          foreach (Localization::collect(config('app.locales')) as $locale){
              $trules = $trules + [
                      Localization::translateFiledName('logo', $locale) => 'required|unique:test,logo'.$this -> id,
                  ];
          }
          return $rules + $trules;*/
    }

}
