<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'owner_name' => 'required|string' ,
            'number_type' => 'required|string' ,
            'car_number' => 'required|numeric',
            'car_letter' => 'required|string' ,
            'government_name' => 'required|string' ,
            'document_number' => 'required|numeric' ,
            'mobile' => 'required|numeric|min:11' ,
            'car_type' =>'required|string' ,
            'family_number' => 'required|numeric' ,
            'id_card_number' => 'required|numeric' ,
            'resident_number' => 'required|numeric' ,
            'document_front_photo' => 'required|mimes:jpg,png' ,
            'document_back_photo' => 'required|mimes:jpg,png' ,
            'id_card_photo'=> 'required|mimes:jpg,png' ,
            'car_photo' => 'required|mimes:jpg,png',
            'resident_card_photo' =>'required|mimes:jpg,png' ,

        ];
    }

    public function messages()
    {
        return [
            'owner_name.required' => 'يرجى ادخال اسم المالك',
            'number_type.required' => 'يرجى أختيار نوع المركبة',
            'car_number.required' => 'يرجى ادخال رقم المركبة',
            'car_letter.required' => 'يرجى ادخال الحرف المصاحب للرقم',
            'government_name.required' => 'يرجى ادخال المحافظة',
            'document_number.required' => 'يرجى ادخال رقم السنوية',
            'mobile.required' => 'يرجى ادخال رقم الهاتف',
            'car_type.required' => 'يرجى ادخال نوع المركبة',
            'family_number.required' => 'يرجى ادخال رقم البطاقة التموينية',
            'id_card_number.required' => 'يرجى ادخال رقم الهوية او البطاقة الموحدة',
            'resident_number.required' => 'يرجى ادخال اسم المالك',
            'document_front_photo.required' => 'يرجى ادخال صورة السنوية الامامية',
            'document_back_photo.required' => 'يرجى ادخال صورة السنوية الخلفية',
            'id_card_photo.required' => 'يرجى ادخال صورة الهوية او البطاقة الموحدة',
            'car_photo.required' => 'يرجى ادخال صورة المركبة',
            'resident_card_photo.required' => 'يرجى ادخال صورة بطاقة السكن',

        ];
    }

}
