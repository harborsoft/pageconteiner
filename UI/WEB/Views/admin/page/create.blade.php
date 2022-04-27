
<?php
?>
@extends('pageSection@page::layouts.admin')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

    <div class="d-flex flex-column w-100 p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3><b>Створити сторінку</b></h3>
        </div>

        <form action="{{ route('admin.page.store') }}" method="post">
            @csrf
            @include('pageSection@page::admin.page._form')
        </form>
    </div>

@endsection
