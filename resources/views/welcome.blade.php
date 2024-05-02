<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page Rafi's Shop</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    {{-- Navbar --}}
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
                    <a href="{{ route('profile') }}" class="nav-link"> Visit Profile</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5" style="padding-left: 200px">
            <h2 class="pt-5 mb-2">
                Selamat datang di Toko Kami!
            </h2>
            <h5 class="">
                Temukan beragam pilihan produk menarik. Belanja sekarang dan nikmati pengalaman berbelanja menyenangkan.
            </h5>
            <p class="mt-4 fs-7 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Explicabo sequi accusantium odit labore aperiam eaque, soluta doloremque nemo
                maiores nostrum quis fugit, accusamus soluta dolorem numquam ipsa necessitatibus provident
                perspiciatis, sapiente dignissimos quae repellat pariatur nam. Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Iste, voluptatem! Lorem ipsum dolor sit amet.
            </p>
            <div class="button-container mt-5 ">
                <!-- Tombol "GRAB NOW" -->
                <a href="{{ url('barangs') }}" class="btn btn-dark">GRAB NOW -></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="home-kanan p-md-2">
                <img src="{{ Vite::asset('/resources/images/pict_store.jpg') }}" class="img-fluid p-md-4"
                    alt="Gambar Toko">
            </div>
        </div>

        <div class="col-md-5 d-flex gap-4 pt-0" style="padding-left: 200px">
            <div class="d-flex flex-column ps-2" style="border-left: 2px solid black">
                <span class="fw-bold fs-5" style="color: black"> Offline Store at</span>
                <span class="fs-6">Jl.Tanjungsari, Taman, Sidoarjo</span>
            </div>
            <div class="d-flex flex-column ps-2" style="border-left: 2px solid black">
                <span class="fw-bold fs-5" style="color: black">10k+</span>
                <span class="fs-6">Followers on Social Media </span>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
