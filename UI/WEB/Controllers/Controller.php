<?php

namespace App\Containers\PageSection\Page\UI\WEB\Controllers;

use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Ship\Parents\Controllers\WebController;
use Exception;
use Harborsoft\Harbor\Core;
use Illuminate\Http\RedirectResponse;


class Controller extends WebController
{
    public function index()
    {
        $category = Category::find(1);
        $harbor = Core::start('test');

        dd($harbor);
       // dd($category->pages);
        return view('pageSection@page::welcome');
    }

    public function show()
    {
        return view('pageSection@page::show');
    }
}
