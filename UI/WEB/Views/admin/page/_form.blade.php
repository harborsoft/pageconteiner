<?php
?>

<div class="panel">
    <div class="header">
        @include('pageSection@page::admin.alert._success')
        @include('pageSection@page::admin.alert._danger')
        <div class="mb-3">
            <div class="form-check form-switch">
                <input type="hidden" value="0" name="visible">
                <input name="visible" value="1" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" @isset($page->visible) {{$page->visible ? 'checked' : ''}} @endisset
                >
                <label class="form-check-label" for="flexSwitchCheckChecked">Відображення</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Назва сторінки</label>
            <input type="text" name="name" value="{{ $page->name ?? old('name') }}" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Назва сторінки, яка буде привязана до категорій меню або навігації.</div>
        </div>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Адреса сторінки</label>
                <input type="text" name="slug" value="{{ $page->slug ?? old('slug') }}" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Адреса сторінки, яка буде відображатись у полі адреси браузера.</div>
            </div>
        <div class="mb-3">
            <label for="exampleInputCategory1" class="form-label">Категорія меню</label>
            <select class="form-control" name="categories[]" multiple>
                @include('pageSection@page::admin.page._categories')
            </select>
        </div>
        <div class="mb-3">
            <textarea id="formEditor" name="body" class="form-control">{{ $page->body ?? old('body') }}</textarea>
        </div>
    </div>
    <div class="footer">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary d-flex align-content-center align-items-center">
                <i class="bi bi-save2 icone-1x"></i> <span class="mx-2"> Зберегти</span> </button>
        </div>
    </div>
</div>
