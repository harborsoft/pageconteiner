<?php

namespace App\Containers\PageSection\Page\Tasks;

use App\Containers\PageSection\Page\Exceptions\PageNotCreateException;
use App\Containers\PageSection\Page\Data\Validators\PageValidator;
use App\Containers\PageSection\Page\Data\Repositories\PageRepository;
use App\Ship\Core\Tasks\Task;


class CreatePageTask extends Task
{
    private PageRepository $pageRepository;
    private PageValidator $pageValidation;

    public function __construct(PageRepository $pageRepository, PageValidator $pageValidator)
    {
        $this->pageRepository = $pageRepository;
        $this->pageValidation = $pageValidator;
    }

    /**
     * @throws PageNotCreateException
     */
    public function run($request)
    {
        $this->pageValidation->with($request->except('categories'))->passesOrFail();
        $page = $this->pageRepository->create($request->except('categories'));

        if($request->has('categories'))
            $page->categories()->attach($request->input('categories'));

        return $page;
    }
}
