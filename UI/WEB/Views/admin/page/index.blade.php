<?php

?>
@extends('pageSection@page::layouts.admin')

@section('title', 'Page Title')

@section('nav-sidebar')
    @parent
    @include('pageSection@page::admin._nav_tab')
@endsection

@section('content')

    <div class="d-flex flex-column w-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3><b>Список сторінок</b></h3>
            <a href="{{ route('admin.page.create') }}" class="btn-primary btn"><i class="bi bi-folder-plus"></i> Створити</a>
        </div>
        <div class="table-panel">
            <table class="table table-borderless table-sm table-striped table-hover w-100 m-0">
                <thead>
                <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <th scope="col">Назва сторінки</th>
                    <th scope="col">Url сторінки</th>
                    <th scope="col">Status</th>
                    <th scope="col">Role</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($pages as $page)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{ $page->name ?? ''}}</td>
                        <td>{{ $page->slug ?? ''}}</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td class="d-flex align-content-end align-items-end justify-content-end">
                            <form action="{{ route('admin.page.destroy', $page->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger mx-2"><i class="bi bi-pencil-square"></i></button>
                            </form>
                            <a href="{{ route('admin.page.edit', $page) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                @empty
                @endforelse

                </tbody>
            </table>
        </div>


    </div>
@endsection
