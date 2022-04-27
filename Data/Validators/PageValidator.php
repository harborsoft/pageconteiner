<?php

namespace App\Containers\PageSection\Page\Data\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class PageValidator extends LaravelValidator {

    protected $rules = [
        'name' => 'required',
        'slug'  => 'required|min:3',
        'body'=> 'required',
    ];

    protected $messages = [
        'required' => 'Поле :attribute не заповнено, заповніть його.',
    ];

    protected $attributes = [
        'name' => 'Назва сторінки',
        'body' => 'Observation',
        'slug' => 'Адреса сторінки'
    ];


}
