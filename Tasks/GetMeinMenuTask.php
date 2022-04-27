<?php

namespace App\Containers\PageSection\Page\Tasks;

use App\Containers\PageSection\Page\Data\Criterias\CategoryPagesCriteria;
use App\Containers\PageSection\Page\Data\Repositories\CategoryRepository;
use App\Containers\PageSection\Page\Models\Category;
use App\Ship\Core\Tasks\Task;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Database\Eloquent\Collection;
use Exception;


class GetMeinMenuTask extends Task
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function run(int $category_id):Category
    {
        try {
            $this->categoryRepository->pushCriteria(CategoryPagesCriteria::class);
            $category = $this->categoryRepository->find($category_id);
        } catch (Exception $e) {
            throw new NotFoundException();
        }

        return $category;
    }
}

