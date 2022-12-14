<?php

namespace App\Http\Requests\Shipschedules;

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
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('post')) {
            return $this->createRules();
        } elseif ($this->isMethod('put')) {
            return $this->updateRules();
        }
    }
    /**
     * Define validation rules to store method for resource creation
     *
     * @return array
     */
    public function createRules(): array
    {
        return [
            'vessel_name' => 'required|string|max:191',
            'voyage_number' => 'required|string|max:191',
            'vessel_type' => 'required|string|max:191',
        ];
    }

    /**
     * Define validation rules to update method for resource update
     *
     * @return array
     */
    public function updateRules(): array
    {
        return [
            'vessel_name' => 'required|string|max:191',
            'voyage_number' => 'required|string|max:191',
            'vessel_type' => 'required|string|max:191',
        ];
    }
}
