<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                    case 'addProduct':
                        $rules = [
                            'Product_Name' => 'required',
                            'Product_Price' => '',
                            'Product_Desc' => '',
                            'Product_Quantity' => '',
                            'Product_Size' => '',
                            'Product_Pin' => '',
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
            'Product_Name.required' => 'Vui lòng nhập tên sp',
            'Product_Name.unique' => 'Vui lòng nhập tên sp khác',
            'Product_Price.required' => 'Vui lòng nhập giá sp',
            'Product_Desc.required' => 'Vui lòng nhập mô tả sp',
            'Product_Quantity.required' => 'Vui lòng nhập số lượng sp',
            'Product_Size.required' => 'Vui lòng nhập size sp',
            'Product_Pin.required' => 'Vui lòng nhập pin sp',
        ];
    }
}
