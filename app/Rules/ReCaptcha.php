<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
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
         $response = Http::get("https://www.google.com/recaptcha/api/siteverify",[
             'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
             'response' => $value
         ]);
 
         return $response->json()["success"];
     }
 
     /**
      * Get the validation error message.
      *
      * @return string
      */
     public function message()
     {
        return 'The google recaptcha is required.';
     }
}
