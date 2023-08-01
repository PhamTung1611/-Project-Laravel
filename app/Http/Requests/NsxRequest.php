<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NsxRequest extends FormRequest
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

            $currentAction = $this->route()->getActionMethod();// lấy phương thức hoạt động
            switch ($this->method()) {
                case 'POST':
                    switch ($currentAction) {
                        case 'addNsx':
                                $rules = [
                                    'TenNSX' => 'required',
                                    'GioiThieu' => 'required'
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
        return[
            'TenNSX.required' => 'Vui lòng điền tên NSX',
            'GioiThieu.required' => 'Vui lòng điền Giới thiệu',
        ];
    }
}
