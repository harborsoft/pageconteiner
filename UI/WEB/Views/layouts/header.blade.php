<?php

    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                @foreach($navigation->pages as $page)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{$page->name}}</a>
                </li>
                @endforeach
            </ul>
            <div class="phone me-auto">
                <span><a href="">(067) 593-00-02</a> </span>
                <span><a href="">(050) 536-54-34</a> </span>
                <span><a href="">(093) 445-78-44</a> </span>
            </div>
            <ul class="navbar-nav navbar-nav-scroll d-flex" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Власний кабінет</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Реєстрація</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

