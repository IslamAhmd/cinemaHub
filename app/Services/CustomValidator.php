<?php

namespace App\Services;


use Illuminate\Support\Facades\Route;

class CustomValidator extends \Illuminate\Validation\Validator {

    public function validateRoute($attribute, $value, $parameters){
        return Route::has($value);
    }
}