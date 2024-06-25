<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Dates implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        $value = json_decode($value, true);
        if(isset($value['init'])) $value['init'] = Carbon::createFromFormat($value['format'], $value['init']);
        if(isset($value['end'])) $value['end'] = Carbon::createFromFormat($value['format'], $value['end']);
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if(isset($value['init'])) $value['init'] = Carbon::parse($value['init'])->format($value['format']);
        if(isset($value['end'])) $value['end'] = Carbon::parse($value['end'])->format($value['format']);

        return json_encode($value);
    }
}
