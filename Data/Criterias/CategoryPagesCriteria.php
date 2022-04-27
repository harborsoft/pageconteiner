<?php

namespace App\Containers\PageSection\Page\Data\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class CategoryPagesCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->with('pages');//->categories();

        return $model;
    }
}
