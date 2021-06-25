<?php

namespace App\Rules;

use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class IsValidPassword implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */

    public $lengthPasses = true;

    public $uppercasePasses = true;

    public $numericPasses = true;

    public $specialCharacterPasses = true;
    public function passes($attribute, $value)
    {
        $this->lengthPasses = (Str::length($value) >= 8);
        $this->uppercasePasses = (Str::lower($value) !== $value);
        $this->numericPasses = ((bool)preg_match('/[0-9]/', $value));
        $this->specialCharacterPasses = ((bool)preg_match('/[A-Za-z]/', $value));

        return ($this->lengthPasses && $this->numericPasses && $this->specialCharacterPasses);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        switch (true) {


            case !$this->numericPasses
                && $this->specialCharacterPasses:
                return 'The :attribute must be at least 8 characters and contain at least 1 number.';

            case !$this->specialCharacterPasses
                && $this->numericPasses:
                return 'The :attribute must be at least 8 characters and contain at least 1 letter.';


            case !$this->numericPasses
                && !$this->specialCharacterPasses:
                return 'The :attribute must be at least 8 characters and contain at  1 number, and 1 letter.';

            default:
                return 'The :attribute must be at least 8 characters.';
        }
    }
}