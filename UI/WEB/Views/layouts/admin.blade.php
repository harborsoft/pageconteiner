<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>App Name - @yield('title')</title>

<!-- Styles -->
<link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
        <style>
            .admin {
                display: flex;
                min-height: 100vh;
                overflow-x: auto;
                overflow-y: hidden;
            }

        </style>
</head>
<body>
<main class="admin">
    @section('sidebar')
        <div class="d-flex flex-column flex-shrink-0 admin-navbar">
            <div class="d-flex align-items-center logo">
                Admin Panel CMS
            </div>
            <ul class="nav admin-tab-left nav-pills flex-column mb-auto">
                <li >
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370" aria-current="page" >

                        <i class="bi bi-house icone-2x"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer2 icone-2x"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="accordion-header accordion-button d-flex align-items-center nav-link text-5a6370 collapse"
                       aria-current="page" id="flush-headingThree" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                        <i class="bi bi-receipt-cutoff icone-2x"></i><span>Page</span>
                    </a>

                    <ul id="flush-collapseThree" class="nav nav-pills accordion-collapse collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample" >
                        <li class="w-100">
                            <a href="{{ route('admin.page.index') }}"
                               class="d-flex align-items-center nav-link {{ (request()->is('admin/page')) ? 'active' : 'text-5a6370' }}">
                                <span>Сторінки</span>
                            </a>
                        </li>
                        <li class="w-100">
                            <a href="{{ route('admin.page.category.index') }}" class="d-flex align-items-center nav-link {{ (request()->is('admin/page/category')) ? 'active' : 'text-5a6370' }}">
                                <span>Категорії</span>
                            </a>
                        </li>
                        <li class="w-100">
                            <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                                <span>Products</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/pages" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Pages</span>
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="right:0; left: auto;">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    @show
    <div class="d-flex flex-column w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{--<form class="d-flex me-auto mb-2 mb-lg-0">
                        <div class="input-group mb-0">
                            <span class="search-form input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                            <input type="text" class="search-form form-control me-2" placeholder="Пошук" aria-label="Пошук" aria-describedby="basic-addon1">
                        </div>
                    </form>--}}
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="right:0; left: auto;">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
        @yield('content')
    </div>

</main>



<script src="{{ asset('js/app.js') }}" defer></script>
<x-head.tinymce-config />

</body>
</html>
