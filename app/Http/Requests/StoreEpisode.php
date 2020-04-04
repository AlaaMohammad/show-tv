<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEpisode extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:20|max:1000',
            'airing-time-day' => 'required|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',
            'airing-time-hour'=> 'required|date_format:H:i',
        ];
    }
}
