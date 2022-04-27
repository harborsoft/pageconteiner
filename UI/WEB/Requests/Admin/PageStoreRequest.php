<?php

namespace App\Containers\PageSection\Page\UI\WEB\Requests\Admin;

use App\Containers\PageSection\Page\Data\Validators\PageValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

//use App\Ship\Parents\Requests\Request;

class PageStoreRequest extends FormRequest
{
    /**
     * @return  array
     */
    public function rules()
    {
        return [
          /*  'name' => 'required',
            'url'  => 'required|min:3',
            'body'=> 'min:3',*/
        ];
    }


}
