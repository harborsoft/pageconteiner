<?php

namespace App\Containers\PageSection\PageConteiner\UI\WEB\Controllers;

use App\Containers\PageSection\PageConteiner\Models\Category;
use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Ship\Parents\Controllers\WebController;
use Exception;
use Illuminate\Http\RedirectResponse;


class Controller extends WebController
{
    public function index()
    {
        return view('pageSection@pageConteiner::welcome');
    }

    public function show()
    {
        return view('pageSection@pageConteiner::show');
    }
}
