<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' =>[
                'required',
                'integer'
            ],
            'school_id' =>[
                'required',
                'integer'
            ],
            'firstName' =>[
                'required',
                'string'
            ],
            'lastName' =>[
                'required',
                'string'
            ],
            'dateOfBirthday' =>[
                'required',
                'date'
            ],
            'sexe' =>[
                'required',
                'string'
            ],
            'familial_mtatus' =>[
                'required',
                'string'
            ],
            'marital_mtatus' =>[
                'required',
                'string'
            ],
            'father_profession' =>[
                'required',
                'string'
            ],
            'father_phone' =>[
                'required',
                'string'
            ],
            'mother_profession' =>[
                'required',
                'string'
            ],
            'mother_phone' =>[
                'required',
                'string'
            ],
            'malad' =>[
                'required',
                'integer'
            ],
            'type_malade' =>[
                'string'
            ],
            'image' =>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'birth_certificate' =>[
                'nullable',
                'mimes:pdf'
            ],
            'prix_abonne' =>[
                'nullable',
            ],
            'prix_annuel' =>[
                'nullable',
                
            ],
            'prix_total' =>[
                'nullable',
            ],
            'N_parties_the_Koran' =>[
                'integer'
            ],
            'current_party' =>[
                'integer'
            ],
            
        ];
    }
}
