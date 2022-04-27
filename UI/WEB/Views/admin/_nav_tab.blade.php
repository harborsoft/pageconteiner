<div class="d-flex tab-block mx-4 mt-3">
    <ul class="nav nav-pills nav-tab">
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('admin/page')) ? 'active' : '' }}" aria-current="page" href="{{ route('admin.page.index') }}">Сторінки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('admin/page/category')) ? 'active' : '' }}" href="{{ route('admin.page.category.index') }}">Категорії</a>
        </li>
    </ul>
</div>

