<?php
?>

@foreach($categories as $categoryItem)
    <option value="{{ $categoryItem->id ?? ''}}" @isset($page->id)
            @if($page->categories->contains('id', $categoryItem->id))
            selected=""
            @endif
        @endisset
    >
        {{ $delimiter ?? '' }} {{ $categoryItem->name ?? '' }}
    </option>
    @isset($categoryItem->children)
        @include('pageSection@page::admin.page._categories',[
        'categories' => $categoryItem->children,
        'delimiter' => '-'. $delimiter
        ])
    @endisset
@endforeach
