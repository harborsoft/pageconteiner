<?php

namespace App\Containers\PageSection\Page\UI\WEB\Controllers\Admin;



use App\Containers\PageSection\Page\Actions\GetChildrenCategoryAction;
use App\Containers\PageSection\Page\Actions\GetPagesAction;
use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Models\Page;
use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Containers\PageSection\Page\UI\WEB\Requests\Admin\PageStoreRequest;
use App\Ship\Exceptions\NotFoundException;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends AdminController
{
    /**
     * @return View
     * @throws NotFoundException
     */
    public function index(): View
    {
        $pages = app(GetPagesAction::class)->run();
        return view('pageSection@page::admin.page.index',
            compact('pages'));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Ship\Exceptions\NotFoundException
     */
    public function create()
    {
        return view('pageSection@page::admin.page.create', [
            'page'      =>  [],
            'categories'    => app(GetChildrenCategoryAction::class)->run(),
            'delimiter'     => ''
        ]);
    }

    /**
     * @param PageStoreRequest $request
     * @return RedirectResponse
     */
    public function store(PageStoreRequest $request): RedirectResponse
    {

        try {
            app(CreatePageTask::class)->run($request);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessageBag())
                ->withInput();
        }

        return redirect()->route('admin.page.index');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Ship\Exceptions\NotFoundException
     */
    public function edit(Page $page)
    {
        return view('pageSection@page::admin.page.edit', [
            'page'      =>  $page,
            'categories'    => app(GetChildrenCategoryAction::class)->run(),
            'delimiter'     => ''
        ]);
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(Request $request, Page $page)
    {
        $page->update($request->except('categories'));
        $page->categories()->detach();
        if($request->has('categories'))
            $page->categories()->attach($request->input('categories'));

        Session::flash('message', 'Сторінка оновлена!');
        Session::flash('alert-class', 'alert-success');
        Session::flash('route', 'admin.page.index');

        return redirect()->route('admin.page.edit', $page);
    }

    public function destroy($id)
    {
        dd($id);
    }
}
