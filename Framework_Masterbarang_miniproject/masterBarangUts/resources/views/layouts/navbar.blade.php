@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg bg-warning text-warning border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand bg-dark px-5 rounded" href="">Data Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-dark" aria-current="page" href="home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-dark" href="{{ route('items.index') }}">List Items</a>
                </li>
            </ul>
            <span class="navbar-text fw-bold text-dark">
                Sistem Informasi
            </span>
        </div>
    </div>
</nav>
