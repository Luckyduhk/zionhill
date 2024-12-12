<?php

namespace App\Http\Requests;

use App\Models\Member;
use Illuminate\Foundation\Http\FormRequest;

class MemberStoreRequest extends FormRequest
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
            'existing_family_id' => ['nullable', 'integer', 'exists:families,id'],
            'new_family_name' => ['nullable', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'notes' => ['required', 'string', 'max:500'],
            'prayer_requests' => ['required', 'string', 'max:500'],
            'last_visited_date' => ['required', 'date', 'before_or_equal:today'],
            'clothing_size' => ['required', 'string', 'in:' . implode(',', Member::CLOTHING_SIZES)],
            'picture' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:1024'],
        ];
    }
}
