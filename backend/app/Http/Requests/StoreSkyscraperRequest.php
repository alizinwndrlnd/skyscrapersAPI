<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkyscraperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        return [
            "name" => ["required", "min:2", "max:255"],
            "city_id" => ["required", "exists:cities,id"],
            "height"=> ["required", "numeric", "between:140,1000"],
            "stories"=>["numeric", "between:25,300"],
            "finished" => ["numeric", "between:1900,3000"]
        ];
    }
}
