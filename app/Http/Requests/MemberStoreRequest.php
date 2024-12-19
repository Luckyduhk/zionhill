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
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'notes' => ['nullable', 'string', 'max:500'],
            'prayer_requests' => ['nullable', 'string', 'max:500'],
            'last_visited_date' => ['nullable', 'date', 'before_or_equal:today'],
            'clothing_size' => ['nullable', 'string', 'in:' . implode(',', Member::CLOTHING_SIZES)],
            'picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:' . 10 * 1024],
        ];
    }
}
