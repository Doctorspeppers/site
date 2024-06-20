<?php

namespace App\Http\Requests;

use App\Models\Curriculum;
use Illuminate\Foundation\Http\FormRequest;

class StoreCurriCulumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if($this->route('curriculum')) {
            $curriculum = Curriculum::find($this->route('curriculum'));
            return $curriculum->user_id == auth()->user()->id || auth()->user()->is_admin;
        }
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
            'subtitle' => 'required',
            'resume' => 'required',
            'skills' => 'required|json',
            'links' => 'required|json'
        ];
    }
}
