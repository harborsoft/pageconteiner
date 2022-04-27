<?php
?>

<div class="panel">
    <div class="header">
        @include('pageSection@page::admin.alert._success')
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Назва категорії</label>
            <input type="text" name="name" value="{{ $category->name ?? '' }}" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Назва категорії або назва меню до якого буде відноситись сторінки.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputCategory1" class="form-label">Батьківська категорія</label>
            <select name="parent_id" class="form-control">
                <option value="0">-- без батьківської категорії</option>
                @include('pageSection@page::admin.category._categories')
            </select>
        </div>
    </div>
    <div class="footer">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary d-flex align-content-center align-items-center">
                <i class="bi bi-save2 icone-1x"></i> <span class="mx-2"> Зберегти</span> </button>
        </div>
    </div>
</div>
