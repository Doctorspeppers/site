<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if($this->route('curriculum')) {
            return $this->route('curriculum')->user_id == auth()->user()->id || auth()->user()->is_admin;
        }
        if($this->route('project')) {
            return $this->route('project')->created_by == auth()->user()->id || auth()->user()->is_admin;
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
            'topic_id' => 'optional',
            'title' => 'required',
            'text' => 'required',
            'dates' => 'array|required|required_array_keys:init,end,format',
            'skills' => '',
            'links' => 'array|required_array_keys:labels,links|required',
        ];
    }
}
