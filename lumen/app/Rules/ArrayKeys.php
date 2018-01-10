<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ArrayKeys implements Rule
{

    private $keys = [];

    public function __construct($keys) {
        $this->keys = $keys;
    }
    /**
     * Determine if the validation rule passes.
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        foreach (array_keys($value) as $key) {
            if (!in_array($key, $this->keys)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     * @return string
     */
    public function message()
    {
        return 'Wrong :attribute keys. Expected [' . implode(', ', $this->keys) . '].';
    }
}
