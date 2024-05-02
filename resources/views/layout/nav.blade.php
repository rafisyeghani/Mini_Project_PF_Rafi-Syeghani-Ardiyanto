@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-box-seam"
                style="margin-right: 10px"></i>Rafi's Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('home') }}" class="nav-link active">Home</a>
                <a href="{{ route('barangs.index') }}" class="nav-link active"> List Barang</a>
                <a href="{{ route('profile') }}" class="nav-link active"> Visit Profile</a>
            </div>
        </div>
    </div>
</nav>
