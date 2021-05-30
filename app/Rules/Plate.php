<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Plate implements Rule
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
    public function passes($attribute, $value)
    {
        //OZO-8901
        $dash = (substr($value,3,1));
        $letters = (substr($value,0,-5));
        $numbers = (substr($value,-4));

        if($dash == "-" && ctype_alpha($letters) && ctype_digit($numbers)){
            return true;
        }
        return false;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Must be a valid plate code';
    }
}
