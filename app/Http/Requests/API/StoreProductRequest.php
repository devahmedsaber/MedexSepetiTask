<?php

namespace App\Http\Requests\API;

use App\Http\Requests\ApiRequest;

class StoreProductRequest extends ApiRequest
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
            'category_id' => 'nullable|numeric',
            'title'       => 'required|string|max:255',
            'price'       => 'required|numeric',
            'tag'         => 'required|string|in:normal,best_selling,most_viewed,just_arrived',
            'image'       => 'nullable|image',
            'is_promoted' => 'required|string|in:yes,no',
            'status'      => 'required|string|in:active,inactive',
        ];
    }
}
