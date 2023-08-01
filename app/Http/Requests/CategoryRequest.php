<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        // return [
        //     //
        // ];
            $rules = [];

            $currentAction = $this->route()->getActionMethod();// lấy phương thức hoạt động
            switch ($this->method()) {
                case 'POST':
                    switch ($currentAction) {
                        case 'addCategory':
                                $rules = [
                                    'Category_Name' => 'required',
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
            'Category_Name.required' => 'Vui lòng điền Category'
        ];
    }
}
