<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlterCurriculumEntity extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if($this->route('curriculum')) {
            $curriculum = $this->route('curriculum');
            return $curriculum->created_by == auth()->user()->id || auth()->user()->is_admin;
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
            //
        ];
    }
}
