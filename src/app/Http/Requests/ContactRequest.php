<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'family_name'=> ['required', 'string','max:255'],
            'given_name'=> ['required', 'string', 'max:255'],
            'gender'=> ['required', 'string']
            'email'=> ['required', 'string', 'max:255'],
            'postal_code'=> ['required', 'numeric', 'max:8'],
            'address'=> ['required', 'string', 'max:255'],
            'building_name'=> ['string', 'max:255'],
            'content'=> ['required', 'text', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'family_name.required'=> '名字を入力してください',
            'family_name.string'=> '名字を文字列で入力してください',
            'family_name.max'=> '名字を255文字以下で入力してください',
            'given_name.required'=> '名前を入力してください',
            'given_name.string'=> '名前を文字列で入力してください',
            'given_name.max'=> '名前を255文字以下で入力してください',
            'gender.required'=> '性別を選択してください'
            'email.required'=> 'メールアドレスを入力してください',
            'email.string'=> 'メールアドレスを文字列で入力してください',
            'email.max'=> 'メールアドレスを255文字以下で入力してください',
            'postal_code.required'=> '郵便番号を入力してください',
            'postal_code.numeric'=> '郵便番号を数値で入力してください',
            'postal_code.max'=> '郵便番号を8文字で入力してください',
            'address.required'=> '住所を入力してください',
            'address.string'=> '住所を文字列で入力してください',
            'address.max'=> '住所を255文字以下で入力してください',
            'building_name.string'=> '住所を文字列で入力してください',
            'building_names.max'=> '住所を255文字以下で入力してください',
            'content.required'=> 'ご意見を入力してください',
            'content.string'=> 'ご意見を文字列で入力してください',
            'contents.max'=> 'ご意見を255文字以下で入力してください',
        ]
    }
}
