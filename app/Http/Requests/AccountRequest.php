<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
        $rules = [];

        $currentAction = $this->route()->getActionMethod(); // lấy phương thức hoạt động
        switch ($this->method()) {
            case 'POST':
                switch ($currentAction) {
                    case 'addUser':
                        $rules = [
                            'tendangnhap' => 'required',
                            'matkhau' => 'required',
                            'name' => 'required',
                            'image' => 'required',
                            'sdt' => 'required',
                            'email' => 'required',
                            'address' => 'required',
                        ];
                        break;
                    case 'login': //name của route
                        $rules = [
                            'email' => 'required',
                            'password' => 'required',
                        ];
                        break;
                    case 'register': //name của route
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|unique:users',
                            'password' => 'required',
                        ];
                        break;
                    default:
                        # code...
                        break;
                }
                break;

            default:
                # code...
                break;
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'tendangnhap.required' => 'Vui lòng điền tendangnhap',
            'matkhau.required' => 'Vui lòng điền matkhau',
            'name.required' => 'Vui lòng điền name',
            'image.requires' => 'vui long dien link anh',
            'sdt.required' => 'Vui lòng điền sdt',
            'email.required' => 'Vui lòng điền email',
            'address.required' => 'Vui lòng điền address',
            'name.required' => 'Zui lòng điền name',
            'email.required' => 'Zui lòng điền email',
            'email.unique' => 'Zui lòng điền email #',
            'password.required' => 'Zui lòng điền password',
        ];
    }
}
