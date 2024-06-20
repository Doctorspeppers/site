<?php

namespace App\Http\Requests;

use App\Models\Curriculum;
use Illuminate\Foundation\Http\FormRequest;

class StoreTopicRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $curriculum = Curriculum::find($this->route('curriculum'));
        return $curriculum->user_id == auth()->user()->id || auth()->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'icon' => 'required',
            'title' => 'required',
            'color' => 'required',
        ];
    }
}
