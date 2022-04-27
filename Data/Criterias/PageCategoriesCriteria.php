<?php

namespace App\Containers\PageSection\Page\Data\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class PageCategoriesCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->with('categories');//->categories();

        return $model;
    }
}
