@extends('layout.app')

@section('content')
<section class="home-section">
    <div class="row">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ Vite::asset('/resources/images/kaos1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('/resources/images/kaos2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('/resources/images/kaos3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('/resources/images/kaos4.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>
    </div>
    <div class="col-md-5" style="padding-left: 50px">
        <h2 class="pt-5 mb-2">
            Selamat Datang di Katalog Produk Kami!
        </h2>
        <h5 class="">
            Temukan beragam produk berkualitas tinggi yang siap membuat Anda selalu tampil mboiss.
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
            <a href="{{ url('barangs') }}" class="btn btn-outline-dark">Beli Sekarang -></a>
        </div>
    </div>
</section>

<style>
    .carousel-item {
        transition: transform 0.5s ease-in-out;
        opacity: 0.8;
    }

    .carousel-inner {
        overflow: hidden;
    }

    .carousel-item:not(.active) {
        position: absolute;
        top: 0;
        left: 100%;
    }

    .carousel-item.active {
        left: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(100%);
    }
</style>

@endsection
